<?php

	/*
		exit(message)
		die(message)
	*/

	$file = 'Osama.txt';

	$handle = fopen($file, 'r')

		or die("Unable to find $file");

	echo 'Hello I Will Write In File Now';