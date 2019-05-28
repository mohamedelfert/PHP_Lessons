<?php

	/*
		array_merge(Array1, Array2, Array3)
	*/

	$arrayOne = array(
		0 => "Osama", 
		1 => "Ahmed", 
		2 => "Sayed"
	);

	$arrayTwo = array(
		2 => "Gamal", 
		3 => "Ali", 
		4 => "Mahmoud", 
		5 => "Sameh"
	);

	$merged = array_merge($arrayOne, $arrayTwo);

	echo "<pre>";

	print_r($merged);

	echo "</pre>";