<?php
  $GLOBALS['Page']->SetVariable('PageContent', 'test');
  $GLOBALS['Page']->SetVariable('PageTitle', 'Login');

  $GLOBALS['Page']->AddStylesheet('login');
  $pageTemplate = $GLOBALS['Page']->GetTemplate('page');

  if(isset($GLOBALS['User']['LoggedIn']) && $GLOBALS['User']['LoggedIn'] == true)
  {
    $LoginTemplate = new Template('login/alreadyLoggedIn');
  }
  else
  {
    $loginSuccess = false;
    if(isset($_POST['username']))
    {

    }

    $LoginTemplate = new Template('loginForm');
    if(isset($_POST['returnURL']))
    {
        $LoginTemplate->SetVariable('RETURN_URL', $_POST['returnURL']);
    }
    else
    {
      $LoginTemplate->SetVariable('RETURN_URL', '{{$PAGE_URL_FOLDER}}?{{$PAGE_URL_VARIABLES}}');
    }
    /*if($loginSuccess == false)
      $LoginTemplate = new Template('loginForm');
    }
    else
    {
      $LoginTemplate = new Template('login/nowLoggedIn');
    }*/
  }
  $pageTemplate->SetVariable('PageContent', $LoginTemplate->GetOutput());
?>
