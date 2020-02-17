<?php
  class Template
  {
    private $Name;
    private $Path;

    private $RawData;
    private $CachedOutput;

    private $Variables;

    public function __construct($name)
    {
      $this->Name = $name;
      $this->Path = GLOBAL_CWD . 'Assets/Templates/' . $this->Name . '.html';
      if(file_exists($this->Path) == false)
      {
        $this->Path = GLOBAL_CWD . 'Assets/Templates/error.html';
        $this->SetVariable('errorTitle', 'Template file not found');
        $this->SetVariable('errorContent', 'The requested template, <strong>' . $this->Name . '</strong>, was not found.');
      }
      $this->RawData = file_get_contents($this->Path);
      $this->CachedOutput = '';
    }

    public function SetVariable($find, $replace)
    {
      $this->Variables[$find] = $replace;
    }

    public function RefreshOutput()
    {
      $this->CachedOutput = $this->RawData;
      if(is_array($this->Variables))
      {
        foreach($this->Variables as $find => $replace)
        {
          $this->CachedOutput = str_replace('{{$' . $find . '}}', $replace, $this->CachedOutput);
        }
      }
    }

    public function GetOutput($refresh = true)
    {
      if($refresh|$this->CachedOutput == '')
      {
        $this->RefreshOutput();
      }
      return $this->CachedOutput;
    }
  }
?>
