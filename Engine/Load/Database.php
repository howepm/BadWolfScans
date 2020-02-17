<?php

  try
  {
    $GLOBALS['Database']['Link'] = mysqli_connect(
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
      mysqli_get_host_info($GLOBALS['Database']['Link']),
      $exception
    ];
  }
?>
