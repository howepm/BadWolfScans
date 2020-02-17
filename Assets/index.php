<?php
  require_once('global.php');

  echo($Globals['Page']->GetOutput());

  require_once(GLOBAL_CWD . 'Engine/CleanExit.php');
?>
