<?php
  function sanitize($input)
  {
    return htmlspecialchars(addslashes(str_replace('{{$', '{ {$', $input)));
  }
?>
