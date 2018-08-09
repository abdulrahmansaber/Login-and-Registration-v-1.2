<?php
  require('auto-include.php');

  // Revieced Data

  $username_reg   = Sanitize::sanitize_string($_POST['username']);
  $firstname_reg  = Sanitize::sanitize_string($_POST['firstname']);
  $lastname_reg   = Sanitize::sanitize_string($_POST['lastname']);
  $email_reg      = Sanitize::sanitize_string($_POST['email']);
  $password_reg   = Sanitize::sanitize_string($_POST['password']);

  $hashedPass = sha1($password_reg);

  $errors_reg = array();

  // Empty Fields Errors
  if (Validation::is_empty($username_reg)) {
    $errors_reg[] = 'Username cannot be empty!';
  }

  if (Validation::is_empty($firstname_reg)) {
    $errors_reg[] = 'Please Enter Your Firstname!';
  }

  if (Validation::is_empty($lastname_reg)) {
    $errors_reg[] = 'Enter Your Lastname Please sir!';
  }

  if (Validation::is_empty($email_reg)) {
    $errors_reg[] = 'Email Address Cannot be empty';
  }

  if (Validation::is_empty($password_reg)) {
    $errors_reg[] = 'Password Cannot be Empty, Enter a Strong Password';
  }

  // Less Than Charsacters
  if (Validation::check_letters($username_reg, 'less', 6)) {
    $errors_reg[] = 'Username can\'t be less than 6 letters';
  }

  if (Validation::check_letters($firstname_reg, 'less', 5)) {
    $errors_reg[] = 'Firstname can\'t be less than 5 letters';
  }

  if (Validation::check_letters($lastname_reg, 'less', 5)) {
    $errors_reg[] = 'Lastname can\'t be less than 5 letters';
  }

  if (Validation::check_letters($email_reg, 'less', 6)) {
    $errors_reg[] = 'Email Address can\'t be less than 6 letters';
  }

  if (Validation::check_letters($password_reg, 'less', 6)) {
    $errors_reg[] = 'Password can\'t be less than 6 letters';
  }

  // If username or email used before

  $findUsedUsername = FindDB::return_rowcount('users', "username", $username_reg);

  if ($findUsedUsername > 0) {
    $errors_reg[] = 'That username was used before. Please choose another';
  }

  $findUsedEmail = FindDB::return_rowcount('users', "email", $email_reg);

  if ($findUsedEmail > 0) {
    $errors_reg[] = 'That Email Address another one using it';
  }

  // Display Errors
  foreach ($errors_reg as $error) {
    echo "<div class='error-login'>" . $error . " <i class='fa fa-close'></i> </div>";
    echo "<script>";

      echo "$(function () {
        $('.register #first-stage .reg-output .error-login i,.register #first-stage .reg-output .success-login i').click(function () {
          $(this).parent().hide(100);
        });
      });";

    echo "</script>";
  }

  // If There's No Errors
  if (Validation::is_empty($errors_reg)) {

    $insertUser = Query::query_rowcount("INSERT INTO `users`(username, firstname,lastname, password, email) VALUES('$username_reg', '$firstname_reg', '$lastname_reg', '$hashedPass', '$email_reg')");

    if ($insertUser > 0) {
      echo "<div class='success-login'> Your Account has been created successfully. Redirecting.... <i class='fa fa-close'></i> </div>";
    }

  }
