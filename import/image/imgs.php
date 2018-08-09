<?php

  Class Picture {

    public $set_image;
    public $img_extension;
    public $set_extensions;
    public $set_max_size;
    public $saved_errors;

    /** get_extension()
     * Get extension of uploaded picture
     * @return string
     */
    public function get_extension()
    {
      @$image_extension = strtolower(end(explode('.', $this->set_image['name'])));
      $this->img_extension = $image_extension;
      return $this->img_extension;
    }

    public function allowed_extensions()
    {
      if (!in_array($this->get_extension(), $this->set_extensions)) {
        return false;
      } else {
        return true;
      }
    }

    public function max_size($max_size)
    {
      if ($this->set_max_size >= $max_size) {
        return true;
      } else {
        return false;
      }
    }

    public function move_picture($img, $path)
    {
      $move = move_uploaded_file($img, $path);
    }

  }
