<?php
	
	// require('user.php');
	require('../config/config.php');

	
	class Auth
	{
		
		public static function login($username, $password) {
			// check if the user in user table 
			// Establish a connection with mysql database
			$mysqli = new mysqli("localhost", "root", "testing.w3", "litmus_cms");
			if ($mysqli->connect_errno) {
			    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
			} else {
				$res = $mysqli->query("SELECT * FROM sample");
				$row = $res->fetch_assoc();
				print_r($row);
			}

			
			// if exist then set the session variable 
			// Redirect to the admin page
		}

	}	

?>