<?php

  define('GLOBAL_CWD', getcwd() . '/');

  require_once(GLOBAL_CWD . 'Engine/Load/Debug.php');

  require_once(GLOBAL_CWD . 'Engine/Include/Libraries.php');
  require_once(GLOBAL_CWD . 'Engine/Include/Classes.php');
  require_once(GLOBAL_CWD . 'Engine/Include/Functions.php');

  require_once(GLOBAL_CWD . 'Engine/Load/Libraries.php');

  require_once(GLOBAL_CWD . 'Engine/Load/Database.php');

  require_once(GLOBAL_CWD . 'Engine/Load/User.php');

  require_once(GLOBAL_CWD . 'Engine/Load/Page.php');
  require_once(GLOBAL_CWD . 'Engine/Load/Module.php');

?>
