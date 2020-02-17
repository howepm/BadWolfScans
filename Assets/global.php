<?php
  define('GLOBAL_CWD', getcwd() . '/');
  define('PAGE_URL', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  define('PAGE_URL_FOLDER', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');

  if(file_exists(GLOBAL_CWD . '.production'))
  {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
    define('DEBUG_MODE', false);
  }
  else
  {
    define('DEBUG_MODE', true);
  }

  require_once(GLOBAL_CWD . 'config.php');

  require_once(GLOBAL_CWD . 'Engine/Functions/Security.php');
  require_once(GLOBAL_CWD . 'Engine/Functions/Misc.php');

  require_once(GLOBAL_CWD . 'Engine/Classes/Page.php');
  require_once(GLOBAL_CWD . 'Engine/Classes/Template.php');

  $Globals['Page'] = new Page();
  $Globals['Page']->SetVariable('PAGE_URL', PAGE_URL);
  $Globals['Page']->SetVariable('PAGE_URL_FOLDER', PAGE_URL_FOLDER);

  /*try
  {
    $Globals['Database']['Link'] = mysqli_connect(
      MYSQL_HOST,
      MYSQL_USER,
      MYSQL_PASS,
      MYSQL_DB
    );
  }
  catch (mysqli_sql_exception $exception)
  {
    $PageError['IsError'] = true;
    $PageError['Errors'][] = [
      'MySQLi Error',
      mysqli_get_host_info($Globals['Database']['Link']),
      $exception
    ];
  }*/

  require_once(GLOBAL_CWD . 'Engine/Modules/' . $Globals['Page']->GetModule() . '/Module.php');
?>
