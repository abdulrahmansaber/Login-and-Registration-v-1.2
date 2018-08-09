<?php

  require('auto-include.php');

  $username = Sanitize::sanitize_string($_POST['username']);
  $password = Sanitize::sanitize_string($_POST['password']);
  $hashed   = sha1($password);
  $remember = Sanitize::sanitize_string($_POST['remme']);

  $errors = array();

  if (Validation::is_empty($username)) {
    $errors[] = 'Please enter your username!';
  }

  if (Validation::is_empty($password)) {
    $errors[] = 'Oh! i see that you have forgotten writting your password!!';
  }

  foreach ($errors as $error) {
    echo "<div class='error-login'>" . $error . "</div>";
  }

  if (empty($errors)) {

    $find = new FindDB();

    $returned_data = $find->dbl_find('users', "username = '$username' OR email = '$username' AND password = '$hashed'");
    $data = $find->dbl_find('users', "username = '$username' OR email = '$username' AND password = '$hashed'", 'data');

    // User choosed not to remember his account and his password in browser
    if ($remember == 0) {

      if ($returned_data > 0) {
        $_SESSION['user_id'] = $data['userid'];
        echo '<div class="success-login">You have Loggined successfully! Redirecting..</div>';
        Redirect::redirect_setTimeout('profile', 3000);
      } else {
        echo '<div class="error-login">Can\'t find any account by this data! <i class="fa fa-frown-o"></i></div>';
      }

    }

    // Remember choice has been selected..

    if ($remember == 1 || $remember == 'on') {

      setcookie('userid', $data['userid'], time() + 86400 * 30, '/');

      if ($returned_data > 0) {
        echo '<div class="success-login">You have Loggined successfully! Redirecting..</div>';
        Redirect::redirect_setTimeout('profile', 3000);
      } else {
        echo '<div class="error-login">Can\'t find any account by this data! <i class="fa fa-frown-o"></i></div>';
      }

    }


  }
