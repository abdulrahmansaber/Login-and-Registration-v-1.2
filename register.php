<?php
  $title = 'Create account';
  require('auto-include.php');
?>

  <style>

    footer {
      display: none;
    }

  </style>

  <article class='register'>

    <!-- First section -->
    <section class='choose'>
      <h1>Do you have an account?</h1>
      <a href="index">Login Now</a>
    </section>


    <!-- Second section -->
    <section id='first-stage'>

      <!-- Details -->
      <div class='reg-output'></div>

      <h1><i class="icofont icofont-ui-user"></i> Your Personal Informations</h1><hr>

      <form onsubmit='return false'>

        <!-- Username -->
        <div style='width: 98%;'>
          <label>Username:</label>
          <input type='text' placeholder='Enter your username'>
          <span>Username must be 6-50 Letters. Cannot Contain "!@#$%^&*()_-".</span>
        </div>

        <!-- Firstname -->
        <div>
          <label>First name:</label>
          <input type='text' placeholder='Enter your First name'>
          <span>Your first name mustn't contain characters.</span>
        </div>

        <!-- Lastname -->
        <div>
          <label>Last name:</label>
          <input type='text' placeholder='Enter your Last name'>
          <span>Your last name mustn't contain characters.</span>
        </div>

        <!-- Email -->
        <div>
          <label>Email Address:</label>
          <input type='email' placeholder='Your Email Address'>
          <span>Please write an right email address.</span>
        </div>

        <!-- Password -->
        <div>
          <label>Password:</label>
          <input type='password' placeholder='Your Strong Password'>
          <span>Please write a strong password no one can guess it.</span>
        </div>

        <button class='btn btn-primary new-acc'><i class="icofont icofont-plus"></i> Create Account</button>

      </form>
    </section>

  </article>

<?php $app->inc($paths['footer']); ?>
