<?php

  Class Meta_HTML_Tags
  {
   /** setTags() Method
    * Used for setting important meta tags
    * For search engines
    */
    public $descrption, $keywords, $author;
    public function setTags()
    {
      echo "  <meta name='description' content='$this->descrption'> \n";
      echo "  <meta name='keywords' content='$this->keywords'> \n";
      echo "  <meta name='author' content='$this->author'> \n";
    }
  }
