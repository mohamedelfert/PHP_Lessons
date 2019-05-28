<?php

	/*
		str_word_count(String[Required], Format[Optional], Charlist[Optional])
	*/

	$str = "I Love PHP Soo Much & Although JavaScript";

	echo $str . "<br />";

	$count = str_word_count($str, 0, "&");

	echo $count;

/*

	echo "<pre>";

	print_r($count);

	echo "</pre>";

*/