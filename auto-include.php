<?php
  session_start();

  require('import/import.php');

  $app = new get_files('import/');

  $app->require_files();

  $paths = array(
    'header' => 'files/header.php',
    'footer' => 'files/footer.php',
    'navbar' => 'files/navbar.php'
  );

  $app->inc($paths['header']);
