<?php

$array = array(
	"Html" => "10%",
	"Css" => "10%",
	"PHP" => "10%",
	"JS" => "10%",
	"MySQL" => "10%",
	"Ruby" => "10%",
	"Python" => "10%",
);

/*
	array_key_exists( Needle, Haystack )
*/

if ( array_key_exists("JS", $array) ) {

	echo "Yes Its Found";

}