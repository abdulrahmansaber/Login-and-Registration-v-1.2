<?php

  class Sanitize {

    public static function sanitize_string($target)
    {
      return filter_var($target, FILTER_SANITIZE_STRING);
    }

    public static function sanitize_chars($target)
    {
      $array = array('#', '!', '@', '~', '`', '%', '$', '^', '&', '*', '(', ')', '-', '+', '=', '/', ';', '\'', ':', '.', ',', '{', '}');
      $array2 = array('[', ']', '\\', '<', '>', '?');
      $target_finsih = str_replace($array, "", $target);
      $target_f2 = str_replace($array2, "", $target_finsih);
      return $target_f2;
    }

    public static function sanitize_url($target)
    {
      return filter_var($target, FILTER_SANITIZE_URL);
    }

    public static function sanitize_sep_chars($target)
    {
      $return = filter_var($target, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      return $return;
    }

    public static function sanitize_int($target)
    {
      return filter_var($target, FILTER_SANITIZE_NUMBER_INT);
    }

    public static function sanitize_float($target)
    {
      return filter_var($target, FILTER_SANITIZE_NUMBER_FLOAT);
    }

    public static function sanitize_email($target)
    {
      return filter_var($target, FILTER_SANITIZE_EMAIL);
    }

  }
