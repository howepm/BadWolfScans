<?php
  require_once('global.php');

  echo($GLOBALS['Page']->GetOutput());

  require_once(GLOBAL_CWD . 'Engine/CleanExit.php');
?>
