<?php

	/*
		strtolower(String)
		strtoupper(String)
		lcfirst(String)
		ucfirst(String)
		ucwords(String)
	*/

	$str = "Hello PHP I LOVE small";

	echo $str . "<br />";

	$str = strtolower($str);

	echo $str . "<br />";

	$firstOfAll = ucwords($str);

	echo $firstOfAll;