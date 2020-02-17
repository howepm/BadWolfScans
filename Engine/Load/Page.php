<?php
  define('PAGE_URL', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  define('PAGE_URL_FOLDER', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
  $GLOBALS['Page'] = new Page();

  if(DEBUG_MODE == true)
  {
    $GLOBALS['Page']->SetVariable('DEBUG_MODE', 'true');
  }
  else
  {
    $GLOBALS['Page']->SetVariable('DEBUG_MODE', 'false');
  }
  $GLOBALS['Page']->SetVariable('DEBUG_STR', DEBUG_STR);

  $GLOBALS['Page']->SetVariable('GroupName', '<span class="oswald">[Bad Wolf Scans]</span>');
  $GLOBALS['Page']->SetVariable('GROUPNAME', '<span class="oswald">[Bad Wolf Scans]</span>');
  $GLOBALS['Page']->SetVariable('GROUP_NAME', '<span class="oswald">[Bad Wolf Scans]</span>');

  $GLOBALS['Page']->SetVariable('PAGE_URL', PAGE_URL);
  $GLOBALS['Page']->SetVariable('PAGE_URL_FOLDER', PAGE_URL_FOLDER);
  $GLOBALS['Page']->SetVariable('FORCE_REFRESH_CODE', FORCE_REFRESH_CODE);

  if(is_array($_GET))
  {
    $i = 0;
    $variables = '';
    foreach($_GET as $key => $value)
    {
      if($i != 0)
      {
        $variables = $variables . '&';
      }
      $variables = $variables . sanitize($key) . '=' . sanitize($value);
      $i++;
    }
    $GLOBALS['Page']->SetVariable('PAGE_URL_VARIABLES', $variables);
  }
  else
  {
    $GLOBALS['Page']->SetVariable('PAGE_URL_VARIABLES', '');
  }

  $fancyDivider = new Template('fancyDivider');
  $GLOBALS['Page']->SetVariable('fancyDivider', $fancyDivider->GetOutput());
  $GLOBALS['Page']->SetVariable('FancyDivider', $fancyDivider->GetOutput());
  $GLOBALS['Page']->SetVariable('FANCY_DIVIDER', $fancyDivider->GetOutput());

?>
