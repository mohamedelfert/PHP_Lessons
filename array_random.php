<?php

	/*
		array_rand(Array, Number)
	*/

	$array = array("Osama", "Ahmed", "Sayed", "Ali", "Sameh");

	$randomKey = array_rand($array, 2);

	echo "<pre>";

	print_r($array);

	echo "</pre>";

	echo $array[$randomKey[0]] . "<br>";

	echo $array[$randomKey[1]] . "<br>";

	echo $array[2];