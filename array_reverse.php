<?php

/*
	Array Reverse: array_reverse(Array, Preserve)
	Shuffle: shuffle(Array)
*/

$langs = array(
	"Html5",
	"Html",
	"Css",
	"Css3",
	"Js",
	"PHP",
);

echo "<pre>";

print_r($langs); // The Main Array 

echo "<pre>";

shuffle($langs);

echo "<pre>";

print_r($langs); // The Main Array After The Shuffle

echo "<pre>";