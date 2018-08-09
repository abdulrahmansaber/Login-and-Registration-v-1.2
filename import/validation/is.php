<?php

  Class Is {

    public $errors = array();

    public function is_boolean($target, $error)
    {
      if (filter_var($target, FILTER_VALIDATE_BOOLEAN) == true) {
        return true;
      } else {
        $this->errors[] = $error;
      }
    }

    public function is_email($target)
    {
      if (filter_var($target, FILTER_VALIDATE_EMAIL) == true) {
        return true;
      } else {
        return false;
      }
    }

    public function is_url($target, $error)
    {
      if (filter_var($target, FILTER_VALIDATE_URL) == true) {
        return true;
      } else {
        $this->errors[] = $error;
      }
    }

    public function is_int($target)
    {
      if (filter_var($target, FILTER_VALIDATE_INT) == true) {
        return true;
      } else {
        return false;
      }
    }

  }
