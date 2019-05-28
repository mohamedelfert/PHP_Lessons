<?php

/*
	Logical Operators

	[ and ] Condition 1 And Condition 2 And Condition 3

	[ && ] Condition 1 And Condition 2 And Condition 3

	[ xor ] One Condition Is True But Not All

	[ or ] Condition 1 Or Condition 2 Or All Condition

	[ || ] Condition 1 Or Condition 2 Or All Condition

	[ ! ] Not

*/

$age = 40;

$skillYears = 6;

$langs = 4;

if ( $age > 30 || $skillYears > 2 || $langs > 2 ) {

	echo "Accepted";

} 