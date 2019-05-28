<?php

	/*
		substr(String[Required], Start[Required], Length[Optional])
	*/

	$str = "I Love PHP So Much Because PHP Is Famous And Cool";

	$piece = substr($str, -10, -4);

	echo $piece;