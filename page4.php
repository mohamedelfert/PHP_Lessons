<?php

	// Resume The Session

	session_start();

	$_SESSION['favfood'] = 'Chicken';

	echo '<a href="page5.php">Room Number 4</a>';