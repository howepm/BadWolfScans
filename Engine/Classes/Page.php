<?php
  class Page
  {
    private $MainTemplate;
    private $Templates;
    public function GetTemplate($name) { return $this->Templates[$name]; }

    private $ExtraStylesheets;
    private $ExtraJavascript;

    private $Variables;

    private $LoadedModule;
    public function GetModule() { return $this->LoadedModule; }

    public function __construct()
    {
      $this->MainTemplate = new Template('page');
      $this->Templates['page'] = $this->MainTemplate;

      $this->DecodeURL();
    }
    public function SetVariable($find, $replace)
    {
      $this->Variables[$find] = $replace;
    }
    public function AddStylesheet($sheet)
    {
      $this->ExtraStylesheets[] = $sheet;
    }
    public function AddJavascript($file)
    {
      $this->ExtraJavascript[] = $file;
    }
    public function GetOutput()
    {
      $scripts = '';
      $sheets = '';
      if(is_array($this->ExtraStylesheets))
      {
        foreach($this->ExtraStylesheets as $sheet)
        {
          $sheets = $sheets . '<link rel="stylesheet" href="' . PAGE_URL_FOLDER . 'Assets/stylesheets/'. $sheet . '.css?debug='. DEBUG_STR. '&forceRefresh='. FORCE_REFRESH_CODE . '">';
        }
      }
      if(is_array($this->ExtraJavascript))
      {
        foreach($this->ExtraJavascript as $script)
        {
          $scripts = $scripts . '<script src="' . PAGE_URL_FOLDER . 'Assets/js/'. $scripts . '.js?debug='. DEBUG_STR. '&forceRefresh='. FORCE_REFRESH_CODE . '"></script>';
        }
      }
      $this->SetVariable('ExtraStylesheets', $sheets);
      $this->SetVariable('ExtraJavascript', $scripts);
      $output = $this->MainTemplate->GetOutput();
      foreach($this->Variables as $find => $replace)
      {
        $output = str_replace('{{$' . $find . '}}', $replace, $output);
      }
      return $output;
    }

    private function DecodeURL()
    {
      if(isset($_GET['module']) && folder_exists(GLOBAL_CWD . 'Engine/Modules/' . sanitize($_GET['module'] . '/')))
      {
        $this->LoadedModule = sanitize($_GET['module']);
      }
      else
      {
        $this->LoadedModule = 'Home';
      }
    }
  }
?>
