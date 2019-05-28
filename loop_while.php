<?php

/*
	Syntax:

	while ( Expression ) {
	
		// Statement To Execute

	}
*/

$a = 1;

while ( $a <= 20 ) {

	echo $a . "<br>";

	$a++;
	
}

$i = 2;

while ( $i <= 20 ):

	echo $i . "<br>";

	$i++;

endwhile;