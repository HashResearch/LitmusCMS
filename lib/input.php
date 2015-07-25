<?php
	
	/**
	 * Input class for accessing the super global varibles like $_GET, $_POST
	 * For eg:  Input::all(), Input::get('username')
	 */
	class Input
	{
		
		// Return all global data in json
		public static function all() {
			return $_GET ? json_encode($_GET, JSON_PRETTY_PRINT) : json_encode($_POST, JSON_PRETTY_PRINT);
		}

		// Get the single attribute from global variable
		public static function get($key) {
			return $_GET ? $_GET[$key] : $_POST[$key];
		}

	}
?>

