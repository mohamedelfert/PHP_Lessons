<?php

/*
	KSort: ksort(Array, Sorting Type)
	KRSort: krsort(Array, Sorting Type)
*/

$langs = array(
	"Html"	=> 80,
	"Html5"	=> 70,
	"Css"	=> 45,
	"Css3"	=> 90,
	"Js"	=> 95,
	"PHP"	=> 30,
);

echo "<pre>";

print_r($langs); // The Main Array 

echo "<pre>";

krsort($langs, SORT_REGULAR);

echo "<pre>";

print_r($langs); // The Main Array After Sort

echo "<pre>";

