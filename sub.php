<?php

	/*
		substr_compare(String1, String2, Start Position, Length, Case)
	*/

	$str1 = "A osamaZero";

	$str2 = "Osama";

	echo substr_compare($str1, $str2, 2, 5, true);
