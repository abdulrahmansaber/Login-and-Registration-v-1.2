<?php

  Class FileSystem {

    /** is_exists()
     * Check if files exists or doesn't
     */
    public function is_exists($file) {
      if (file_exists($file) == true) {
        return true;
      } else {
        return false;
      }
    }

    /** delete_file()
     * Delete File if exists
     */
    public function delete_file($file)
    {
      if ($this->is_exists($file)) {
        unlink($file);
      } else {
        return false;
      }
    }

    /** create_file()
     * Create File if not exists
     */
    public function create_file($file_name)
    {
      if (!$this->is_exists($file_name)) {
        file_put_contents($file_name, '');
        return true;
      } else {
        return false;
      }
    }

    /** change_permissions()
     * Change Permissions Of File
     */
    public function change_permissions($filename, $permissions)
    {
      if ($this->is_exists($filename)) {
        chmod($filename, $permissions);
        return true;
        echo "Changed";
      } else {
        return false;
      }
    }

    /** change_owner()
     * Change Owner Of File
     */
    public function change_owner($file, $owner)
    {
      chown($file, $owner);
    }

  }
