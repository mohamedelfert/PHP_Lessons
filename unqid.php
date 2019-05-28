<?php

	/*
		uniqid(Prefix, More_Entropy);
		Unique Identifier
	*/

	$random = uniqid('', TRUE);

	echo $random . '<br>';

	var_dump($random);