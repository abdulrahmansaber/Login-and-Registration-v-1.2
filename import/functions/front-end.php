<?php

  Class FrontEnd {

  /** hide_element() Method
   * @return string
   * Used for hiding html elements
   * Put , to seperate elements(classes, ids, elements)
   */
    public static function hide_element($element)
    {
      echo "<style>$element { display: none !important; }</style>";
    }


   /** show_element() Method
    * Used for showing html elements
    */
    public function show_element($element)
    {
      echo "<style>$element { display: block; }</style>";
    }

   /** css() Method
    * Used for running a CSS Code
    */
    public function css($style)
    {
      echo "<style>$style</style>";
    }

   /** js() Method
    * Used for running a JavaScript Code
    * Errors 'll appear on console
    */
    public function js($script)
    {
      echo "<script>$script</script>";
    }

  }
