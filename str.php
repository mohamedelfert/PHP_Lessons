<?php

	/*
		Str_Repeat: str_repeat(String[Required], Repeat[Required])
		Str_Shuffle: str_shuffle(String)
		StrLen: strlen(String)
	*/

	$str = "Osama";

	$length = strlen($str);

	echo $length;

	if ($length > 10) {

		echo "Sorry Your Name Is Larger Than 10 Letters Please Choose One Small";

	}