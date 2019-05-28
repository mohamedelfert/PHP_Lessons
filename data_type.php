<?php

$var1 = "I Love PHP"; // Data Type [1] String

$var2 = 100; // Data Type [2] Integer

$var3 = FALSE; // Data Type [3] Boolean

$var4 = 10.5; // Data Type [4] Floating Point Number AKA Double

$var5 = array(
	"A" => "Val1",
	"B" => "Val2",
	"C" => "Val3",
); // Data Type [5] Array

$var6 = NULL; // Data Type [6] NULL

class Book {

	function Book() {

		$this->genre = "Adventure";
	}
}

$var7 = new Book(); // Data Type [7] Object

$var8 = fopen('osama.txt', 'r'); // Data Type [8] Resource

echo "<h2>Get Type</h2>";

echo gettype($var1) . "<br/>";

echo gettype($var2) . "<br/>";

echo gettype($var3) . "<br/>";

echo gettype($var4) . "<br/>";

echo gettype($var5) . "<br/>";

echo gettype($var6) . "<br/>";

echo gettype($var7) . "<br/>";

echo gettype($var8) . "<br/>";

echo "<h2>Variable Dump</h2>";

var_dump($var1); echo "<br/>";

var_dump($var2); echo "<br/>";

var_dump($var3); echo "<br/>";

var_dump($var4); echo "<br/>";

var_dump($var5); echo "<br/>";

var_dump($var6); echo "<br/>";

var_dump($var7); echo "<br/>";

var_dump($var8); echo "<br/>";