<?php

  /** explode_time()
   * @return string
   * Used for explode timestamp Like
   * DD:MM:YYYY HH:MM:SS (Time-format)  
   * 12:5:2017 12:50:11
   */
  function explode_time($time, $type = 'date')
  {
    $new_time1 = explode(' ', $time);
    if ($type == 'date') {
      return $new_time1[0];
    } elseif ($type == 'time') {
      return $new_time1[1];
    }
  }
