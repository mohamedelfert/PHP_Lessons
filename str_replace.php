<?php

	/*
		Str_Replace: str_replace(Search, Replace, String, Count)
	*/

	$str = "Line 1\nLine 2\nLine 3\nLine 4\r";

	$order = array("\n", "\n\r", "\r");

	echo $str . "<br />";

	$str = str_replace($order, "<br />", $str);

	echo $str;

