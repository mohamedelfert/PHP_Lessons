<?php

	/*
		Explode: explode(Seprator, String, Limit)
	*/

	$str = "form-learn-lesson-article";

	echo $str . "<br>";

	$arr = explode("-", $str);

	echo "<pre>";

	print_r($arr);

	echo "</pre>";

	for ($i = 0; $i < count($arr); $i++) {

		echo "<span class='tag'>" . $arr[$i] . "</span>";

	}