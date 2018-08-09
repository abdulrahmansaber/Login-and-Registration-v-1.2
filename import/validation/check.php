<?php

  Class Validation {

    public static function is_empty($target)
    {
      if (empty($target)) {
        return true;
      } else {
        return false;
      }
    }

    public static function check_letters($target, $less_or_more, $num)
    {
      if ($less_or_more == 'less') {
        if (strlen($target) < $num && !empty($target)) { return true; } else { return false; }
      } elseif ($less_or_more == 'more') {
        if (strlen($target) > $num && !empty($target)) { return true; } else { return false; }
      }
    }

  }
