<?php

	/*
		array_sum(Array);
	*/

	$array = array(
		0 => "Osama",
		1 => 10, 
		2 => 20,
		3 => 1.5,
	);

	$sum = array_sum($array);

	echo "<pre>";

	print_r($array);

	echo "</pre>";

	echo $sum;