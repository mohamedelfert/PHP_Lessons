<?php

	/*
		Trim: trim(String, Charlist)
		\0 NUll
		\t Tab
		\n New Line
		\r Carriage Return
		\x0B Vertical Tab
		" " Space
	*/

	$str = "I Live PHP So Much";

	echo $str . "<br />";

	$trimmed = trim($str, "I Live PHP o Much");

	echo $trimmed;