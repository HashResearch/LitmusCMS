<?php

	require('../lib/function.php');

	echo Auth::login(Input::get('username'), Input::get('password'));

?>