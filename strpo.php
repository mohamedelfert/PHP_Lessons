<?php

	/*
		strpos(String[Required], Find[Required], Offset[Optional)
		stripos(String[Required], Find[Required], Offset[Optional)
		strrpos(String[Required], Find[Required], Offset[Optional)
		strripos(String[Required], Find[Required], Offset[Optional)
	*/

	$str = "I Love PHP So Much Because PHP Is Famous And Cool Language PHP My Life";

	$pos = strripos($str, "php", -2);

	echo $pos;