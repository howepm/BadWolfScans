<?php
  function folder_exists($input)
  {
    return is_dir($input);
  }
  function is_email($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
?>
