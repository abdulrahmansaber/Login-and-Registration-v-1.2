<?php

 /** get()
  * @return 1
  * Check if $_GET request = some values
  */
  function get($get, $value) {
    if (@$_GET[$get] == $value) {
      return true;
    }
  }
