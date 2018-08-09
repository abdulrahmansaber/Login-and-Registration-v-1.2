<?php

  $title = 'Login'; require('auto-include.php');

  if (isset($_SESSION['user_id'])) {
    Redirect::redirect_header('profile');
  }

  if (isset($_COOKIE['userid'])) {
    $_SESSION['user_id'] = $_COOKIE['userid'];
    Redirect::redirect_header('profile');
  }

?>

  <!-- Login Form Structure -->
  <section class='login-form'>
    <h2>Login</h2>
    <div class="success-d">

    </div>
    <form onsubmit='return false' method=post>
      <label>Username or Email:</label>
      <input type=text placeholder='Enter your Username or Email Address'>

      <label>Password:</label>
      <input type=password placeholder='Enter your Password'>

      <label for='checkbox-box' class='checkbox'><input type='checkbox' id='checkbox-box'> <strong>Remember me?</strong></label>

      <button class='btn btn-primary' >Go Away...!</button>
    </form>
  </section>


<?php $app->inc($paths['footer']); ?>
