<?php

	/*
		array_fill(Index, Number, Value);
	*/

	$array = array_fill(1, 20, array_fill(5, 10, "Fatma"));

	echo "<pre>";

	print_r($array);

	echo "</pre>";