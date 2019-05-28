<?php

/*

	Super Global

	

*/

$name = "Osama"; // In GLobal Scope

function testFunc() { 

	echo "Echo From Inside The Function " . $name . "<br>";

}

testFunc();

echo "Echo From Outside The Function " . $name . "<br>";