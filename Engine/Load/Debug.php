<?php
  if(file_exists(GLOBAL_CWD . '.production'))
  {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
    define('DEBUG_MODE', false);
    define('DEBUG_STR', '');
    require_once(GLOBAL_CWD . 'config.php');
  }
  else
  {
    define('DEBUG_MODE', true);
    define('DEBUG_STR', md5(time()));
    require_once(GLOBAL_CWD . 'config.debug.php');
  }
?>
