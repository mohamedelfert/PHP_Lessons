<?php

/*
	Array_Pop: array_pop(Array)
	Array_Shift: array_shift(Array)
*/

$langs = array(
	"Html",
	"Html5",
	"Css",
	"Css3",
	"Js",
	"PHP",
	"Python",
);

echo "<pre>";

print_r($langs);

echo "</pre>";

$firstLang = array_shift($langs);

echo "<pre>";

print_r($langs);

echo "</pre>";

echo $firstLang;