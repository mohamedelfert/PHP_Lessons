<?php

	/*
		Str_Split: str_split(String, Length)
	*/
/*
	$str = "Hello I Love PHP";

	echo $str . "<br>";

	$arr = str_split($str, 10);

	echo "<pre>";

	print_r($arr);

	echo "</pre>";
*/
	/*
		Chunk_Split: chunk_split(String, Length[Default Value 76], End[Default Value \r\n])
	*/

	$str = "HelloILovePHP";

	echo $str . "<br>";

	$arr = chunk_split($str, 2, " @ ");

	echo $arr;