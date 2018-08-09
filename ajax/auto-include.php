<?php
  session_start();

  require('../import/import.php');

  $app = new get_files('../import/');

  $app->require_files();
