<?php

	session_start();

	$_SESSION['name'] = 'Osama';

	include 'c.php';

	echo '<a href="about.php">About</a> | ';

	echo '<a href="test.php">Test</a>';