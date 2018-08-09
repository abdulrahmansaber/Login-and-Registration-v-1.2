<?php

  function require_frontend($type, $files)
  {
    if ($type === 'js') {
      if (is_array($files)) {
        foreach ($files as $file) {
          echo "<script src='" . $file . ".js" . "'></script>\n";
        }
      }
    }

    if ($type == 'css') {
      if (is_array($files)) {
        foreach ($files as $file) {
          echo "<link rel='stylesheet' href='" . $file . ".css" . "'>\n";
        }
      }
    }
  }
