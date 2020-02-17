<?php
  define('MYSQL_HOST', 'localhost');
  define('MYSQL_USER', 'root');
  define('MYSQL_PASS', '');
  define('MYSQL_DB', 'bw');

  define('FORCE_REFRESH_CODE', md5('swordfish'));
    //force refresh of css, js etc

  /*
    If you want to force a refresh every time a
    person loads the page even on CloudFlare,
    uncomment the following line, but what I
    would do is just change the FORCE_REFRESH_CODE
    when you make a big change in the assets.

    That's what it's for!

    Any config settings below this point are the
    'enable at your own peril' ones.
  */
  //define('DEBUG_STR', md5(time()));

  /*
    Force debug mode even with a .production
    file. Please do not do this... but... it's
    here if you want it...
  */
  //define('DEBUG_MODE', true);

?>
