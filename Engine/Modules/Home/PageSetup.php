<?php
  $GLOBALS['Page']->SetVariable('PageContent', 'test');
  $GLOBALS['Page']->SetVariable('PageTitle', 'Home');

  $GLOBALS['Page']->AddStylesheet('home');

  $HomeTemplate = new Template('home');
  $pageTemplate = $GLOBALS['Page']->GetTemplate('page');
?>
