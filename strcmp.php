<?php

	/*
		strcmp(String1, String2)
		strncmp(String1, String2, Length)

		= 0 => The Two Strings Are Equals
		> 0 => The String 1 Larger Than String Two
		< 0 => The String 1 Less Than String 2
	*/

	$str1 = "PHPPHP";

	$str2 = "PHP";

	echo strncmp($str1, $str2, 6) . "<br />";

	/*
		strrev(String)
	*/

	$normal = "Osama";

	echo $normal . "<br />";

	echo strrev($normal);