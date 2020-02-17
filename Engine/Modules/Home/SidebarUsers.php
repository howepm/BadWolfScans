<?php
  if(isset($GLOBALS['User']['LoggedIn']) && $GLOBALS['User']['LoggedIn'] == true)
  {
    $pageTemplate->SetVariable('UserArea', 'hi');
  }
  else
  {
    $loginArea = new Template('loginFormSidebar');
    $HomeTemplate->SetVariable('UserArea', $loginArea->GetOutput());
  }
?>
