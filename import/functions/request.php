<?php

  Class RequestType {

    public static function request($request)
    {
      if ($_SERVER['REQUEST_METHOD'] == $request) {
        return true;
      }
    }

    public static function find_get($get)
    {
      if (isset($_GET[$get])) {
        return true;
      }
    }

  }
