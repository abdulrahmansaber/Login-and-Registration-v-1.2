<?php

  Class Messages {

   /** setHTML() Method
    * Used for adding class, tag, and content
    */
    public function setHTML($tag, $classes, $content) {
      echo "<$tag class='$classes'>$content</$tag>";
    }

    # Error Message
    public static function error($msg)
    {
      self::setHTML("div", "alert alert-danger", $msg);
    }

    # Success Message
    public static function success($msg)
    {
      self::setHTML("div", "alert alert-success", $msg);
    }

    # Warning Message
    public static function warning($msg)
    {
      self::setHTML("div", "alert warning", $msg);
    }

    # Info Message
    public static function info($msg)
    {
      self::setHTML("div", "alert alert-info", $msg);
    }

  }
