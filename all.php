<?php

	/*
		addslashes: addslashes(String)
		stripslashes: stripslashes(String)
		strip_tags(String, Allow)
	*/

	$str = "I Love <b>PHP</b> Go To <a href='php.net'>PHP.Net</a> To Learn <i>PHP</i>";

	echo $str . "<br />";

	$stripped = strip_tags($str, "<b><i>");

	echo $stripped;
