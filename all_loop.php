<?php

/*

	foreach ( $array as $value ) {
	
		// Code

	}	

	foreach ( $array as $key => $value ) {
	
		// Code

	}	

*/

$friends = array(
	"Soso" => "Safy", 
	"Mido" => "Ahmed",
	"Darsh" => "Hassan",
);

foreach ( $friends as $key => $value ) {

	echo $key . " Is The Nice Name For " . $value . "<br>";

}