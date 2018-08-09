<?php

  // Getting user id who logined
  $ui; global $ui;
  if (isset($_COOKIE['userid'])) {
    $ui_cok = $_COOKIE['userid'];
    $ui = $ui_cok;
    if (!isset($_COOKIE['userid'])) {
      redirect::redirect_header('index.php');
    }
  } else {
    $ui = $_SESSION['user_id'];
  }

  // All UserData
  $data = FindDB::find('users', 'userid', $ui);

?>

  <!-- User Navigation -->
  <nav id='user-nav'>
    <h1><?php echo $data['username']; ?></h1>
    <ul>
      <li><a href='#'>Section 1</a></li>
      <li><a href='#'>Section 2</a></li>
      <li class='open-navright'><a href='#'><i style='vertical-align: top;' class='material-icons'>menu</i></a></li>
    </ul>
  </nav>

  <!-- Overlay Under Right navigation bar -->
  <div class="overlay-navright"></div>

  <!-- Right Navigation Bar -->
  <nav class='right-nav'>

    <!-- Edit Button -->
    <button class='btn btn-primary'><i class='fa fa-edit'></i> Edit</button>

    <!-- Top Image And Full name of user -->
    <section class='top-section'>

      <div>
        <img src='layout/imgs/default-user.png'>
        <h2>
          <?php echo $data['firstname'] . ' ' . $data['lastname']; ?><br>
          <span><a href=''>@<?php echo $data['username']; ?></a></span>
        </h2>
      </div>

    </section><hr>

    <!-- Links -->
    <a href="#"><i class='material-icons'>settings</i> Settings</a>
    <a href="#"><i class='material-icons'>games</i> Contact Admin</a>
    <span class='aside-heading'>Update info</span>
    <a href="#"><i class='material-icons'>account_box</i> Update Profile Picture</a>
    <a href="#"><i class='material-icons'>question_answer</i> Update Security Question</a>
    <a href="#"><i class='material-icons'>public</i> Update Social Media</a>

    <!-- Close Right Navigation Bar Button -->
    <button class='btn btn-white close-nav'>Close</button>
  </nav>
