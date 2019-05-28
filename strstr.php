<?php

	/*
		strstr(String[Required], Search[Required], Before_Search[Optional])
		stristr(String[Required], Search[Required], Before_Search[Optional])
		strchr(String[Required], Search[Required], Before_Search[Optional])
	*/

	$str = "I Love PHP So Much Because PHP Is Cool";

	$char = strchr($str, "PHP", false);

	echo $char;

