<?php

  $GLOBALS['User']['LoggedIn'] = false;
  if(isset($_COOKIE['User']['UUID']))
  {
    $dbResult = $GLOBALS['Database']['Link']->query(
      'SELECT * FROM `users`
      WHERE `uuid` = ' . sanitize($_COOKIE['User']['UUID']) . '
      LIMIT 1'
    );
    if($dbResult->num_rows > 0)
    {
      while($userInfo = $dbResult->fetch_assoc())
      {
        if($userInfo['Password'] == $_COOKIE['User']['PasswordHash'])
        {
          $GLOBALS['User'] = $userInfo;
          $GLOBALS['User']['LoggedIn'] = true;
        }
      }
    }
  }

  if($GLOBALS['User']['LoggedIn'] == true)
  {

  }
?>
