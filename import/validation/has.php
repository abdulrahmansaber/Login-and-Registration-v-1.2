<?php

  class Has {

    public $errors = array();

    public function has_chars($target, $error)
    {
      if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $target)) {
        $this->errors[] = $error;
      }
    }

    public function has_space($target, $error)
    {
      if (preg_match('/\s/', $target)) {
        $this->errors[] = $error;
      }
    }

  }
