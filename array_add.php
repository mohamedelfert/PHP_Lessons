<?php

/*
	Array_Push: array_push(Array, Value1, Value2, Value3)
	Array_Unshift: array_unshift(Array, Value1, Value2, Value3)
*/

$langs = array(
	"Html",
	"Html5",
	"Css",
	"Css3",
	"Js",
	"PHP",
);

echo "<pre>";

print_r($langs); // The Main Array 

echo "<pre>";

array_push($langs, "Python");

echo "<pre>";

print_r($langs); // The Main Array After Adding My Elements

echo "<pre>";