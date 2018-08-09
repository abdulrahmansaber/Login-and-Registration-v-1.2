<?php

	class get_files {

		// Path to require files
		public $path_req;

		public function __construct($path)
		{
			$this->path_req = $path;
		}

		// include function
		public function inc($file)
		{
			include $file;
		}

		public function all_files()
		{
			$arr_ofiles = array(
				$this->path_req . 'database/',
				$this->path_req . 'functions/',
				$this->path_req . 'session/',
				$this->path_req . 'image/',
				$this->path_req . 'validation/',
				$this->path_req . 'filesystem/',
			);
			return $arr_ofiles;
		}

		// foreach files to require it
		public function globfor($path)
		{
      foreach (glob($path . '*.php') as $file) {
        include($file);
      }
		}


		// require files
		public function require_files()
		{
			$need_importing = $this->all_files();
      foreach ($need_importing as $import_file) {
        $this->globfor($import_file);
      }
		}

	}
