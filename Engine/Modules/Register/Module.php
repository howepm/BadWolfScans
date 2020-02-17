<?php
  $GLOBALS['Page']->SetVariable('PageContent', 'test');
  $GLOBALS['Page']->SetVariable('PageTitle', 'Register');

  $GLOBALS['Page']->AddStylesheet('Register');

  $pageTemplate = $GLOBALS['Page']->GetTemplate('page');

  $RegisterErrors = '';
  $registerSucess = false;

  function RegisterError($error)
  {
    global $RegisterErrors;
    global $registerSucess;

    if($RegisterErrors == '')
    {
      $RegisterErrors = [];
    }
    $RegisterErrors[] = $error;
    $registerSucess = false;
    return $RegisterErrors;
  }

  if($GLOBALS['User']['LoggedIn'] == true)
  {
    $RegisterTemplate = new Template('register/loggedInAlready');
  }
  else
  {

    if(isset($_POST['username']))
    {
      $registerSucess = true;
      if($_POST['username'] == '') { RegisterError('Username left blank'); }
      if($_POST['password'] == '') { RegisterError('Password left blank'); }
      if($_POST['passwordConfirm'] == '') { RegisterError('Password confirm left blank'); }
      if($_POST['email'] == '') { RegisterError('e-Mail left blank'); }

      if($_POST['password'] !== $_POST['passwordConfirm']) { RegisterError('Password and confirm password do not match'); }
      if(strlen($_POST['password']) <= 8) { RegisterError('Password was not 8 characters long'); }

      if(is_email($_POST['email']) == false) { RegisterError('e-Mail provided was not valid'); }

      if($_POST['agreeSignup'] != 1) { RegisterError('You did not agree to the terms and rules'); }

      if($registerSucess == true)
      {
        $RegisterTemplate = new Template('register/success');
      }
      else
      {

        $RegisterTemplate = new Template('register/form');
        $RegisterTemplate->SetVariable('Form[Username][Value]', $_POST['username']);
        $RegisterTemplate->SetVariable('Form[Password][Value]', $_POST['password']);
        $RegisterTemplate->SetVariable('Form[PasswordConfirm][Value]', $_POST['passwordConfirm']);
        $RegisterTemplate->SetVariable('Form[AgreeSignup][Value]', $_POST['agreeSignup']);
        $RegisterTemplate->SetVariable('Form[Email][Value]', $_POST['email']);
        //$RegisterTemplate->SetVariable('Form[][Value]', $_POST['']);
      }
    }
    else
    {
      $RegisterTemplate = new Template('register/form');
      $RegisterTemplate->SetVariable('Form[Username][Value]', '');
      $RegisterTemplate->SetVariable('Form[Password][Value]', '');
      $RegisterTemplate->SetVariable('Form[PasswordConfirm][Value]', '');
      $RegisterTemplate->SetVariable('Form[Email][Value]', '');
      $RegisterTemplate->SetVariable('Form[AgreeSignup][Value]', '');
      //$RegisterTemplate->SetVariable('Form[][Value]', $_POST['']);
    }
  }

  if(is_array($RegisterErrors))
  {
    $errors = '';
    $i = 1;

    foreach($RegisterErrors as $error)
    {
      if($i = 1)
      {
        $errors = $error;
      }
      else {
        $errors = $errors . '<br>' . $error;
      }
      $ErrorTemplate = new Template('register/error');

      $i++;
    }
    $ErrorTemplate->SetVariable('RegisterErrors[Errors]', $errors);
    $RegisterTemplate->SetVariable('RegisterErrors', $ErrorTemplate->GetOutput());
  }
  else
  {
    $RegisterTemplate->SetVariable('RegisterErrors', '');
  }

  $TermsConditionsTemplate = new Template('termsConditions');
  $RegisterTemplate->SetVariable('TermsConditions', $TermsConditionsTemplate->GetOutput());
  $RulesTemplate = new Template('rules');
  $RegisterTemplate->SetVariable('Rules', $RulesTemplate->GetOutput());

  $pageTemplate->SetVariable('PageContent', $RegisterTemplate->GetOutput());
?>
