<?php

  /** Request Method ( HTML Form action attribute )
   * Used for checking request method
   * @return true, false
   * Default request method is post
   */
  function requestm($type = 'post')
  {
    if ($_SERVER['REQUEST_METHOD'] == $type) {
      return true;
    } else {
      return false;
    }
  }
