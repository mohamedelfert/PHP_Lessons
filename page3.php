<?php

	// Resume The Session

	session_start();

	echo 'Hello ' . $_SESSION['username'] . ' You Are In Room 3<br>';

	echo '<a href="page4.php">Kitchen</a>';

	echo '<div>You Vied This Page' . $_SESSION['counter'] . ' Times';