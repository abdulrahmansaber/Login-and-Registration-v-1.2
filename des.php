<?php

  require('auto-include.php');

  session_unset();

  session_destroy();

  unset($_COOKIE['userid']);

  setcookie('userid', '', time() - 3600, '/');

  redirect::redirect_header('index.php');
