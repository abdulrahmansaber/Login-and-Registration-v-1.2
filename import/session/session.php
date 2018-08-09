<?php

  Class Sessions {

    /** session_exists()
     * @return true
     * Used for searching for an existing sessions
     * Pass session to find it in if condition
     */
    public static function session_exists($session)
    {
      if (isset($_SESSION[$session])) {
        return true;
      } else {
        return false;
      }
    }

    /** save_new()
     * @return string
     * Used for saving new values of sessions
     */
    public static function save_new($session, $value)
    {
      $session_s = @$_SESSION[$session];
      $_SESSION[$session] = $value;
      return $_SESSION[$session];
    }

    /** destroy()
     * Destroy Session
     * @return true
     */
    public static function destroy($after_destroing)
    {
      session_unset();
      session_destroy();
      Redirect::redirect_header($after_destroing, 0);
      return true;
    }

    /** unset_session
     * Remove all sessions data
     * @return true
     */
    public function unset_session()
    {
      session_unset();
      return true;
    }

  }
