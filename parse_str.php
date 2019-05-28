<?php

	/*
		nl2br: New Line To Break Tag <br>
		nl2br(String, Xhtml)
	*/

	$str = "Hello I Love PHP \n Although \n I Love Js \n \n";

	echo nl2br($str, true);