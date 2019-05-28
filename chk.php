<?php

	$input = $_POST['test'];

	// Sanitize Input

	$goodInput = filter_var($input, FILTER_SANITIZE_EMAIL);

	// Print The Result

	echo 'Input After Sanitize = ' . $goodInput . '<br>';

	// Check For The Result

	if (filter_var($goodInput, FILTER_VALIDATE_EMAIL) !== FALSE) {

		echo 'Good';

	} else {

		echo 'Bad';

	}