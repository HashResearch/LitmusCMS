<?php
	
	require('../config/config.php');

	class User
	{
		function __construct() {
			// Establish a connection with mysql database
			$mysqli = mysqli_connect($_HOST, $_USER, $_PASSWORD, $_DATABASE);
			if (mysqli_connect_errno($mysqli)) {
			    echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		}

		
	}
?>