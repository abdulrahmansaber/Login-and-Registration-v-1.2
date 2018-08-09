<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php title(); ?></title>
  <?php
    $css_path_files = 'layout/css/';
    require_frontend('css', array(
      $css_path_files . 'icofont',
      $css_path_files . 'font-awesome.min',
      $css_path_files . 'resets',
      $css_path_files . 'main',
      $css_path_files . 'profile'
    ));
  ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
