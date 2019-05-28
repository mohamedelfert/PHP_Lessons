<?php

/*
	Syntax

	for ( Expression1; Expression2; Expression3 ) {
	
		Statement To Execute

	}

	Expression 1 = Intitial Counter

*/

	$i = 1; // First Expression [ Initial Counter ]

	while ( $i <= 20 ) {

		echo $i . "<br>";

		$i++; // Third Expression [ Increment ]

	}

/*

$langs = array("Html", "Css", "JavaScript", "Ajax", "Python", "Ruby", "MySQL");

echo "<ul>";

	for ( $i = 0; $i < count($langs); $i++ ) {

		echo "<li>" . $langs[$i] . "</li>";

	}

echo "</ul>";

*/