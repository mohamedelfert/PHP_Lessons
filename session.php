<?php

	session_start(); // Start Or Resume Session

	$_SESSION['username'] = 'Ahmed';

	$_SESSION['favfood'] = 'Rice';

	if(empty($_SESSION['counter'])) {

		$_SESSION['counter'] = 1;

	} else {

		$_SESSION['counter']++;

	}

	echo '<a href="page2.php">Room Number 2</a>';

	echo '<div>You Vied This Page' . $_SESSION['counter'] . ' Times';


