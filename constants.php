<?php

/*
	Syntax: define(Name, Value, Case-Insensitive);
	By Default False
*/

// define("SITE_STATUS", false);

const SITE_STATUS = false;

if (SITE_STATUS == true) {

	$firstName = "Osama";
	echo $firstName . "<br>"; // Variable

	define("FIRST_NAME", "Osama", true);
	echo First_Name; // Contant

	echo "<br>";

	$firstName = "Hassan";
	echo $firstName . "<br>"; // Variable

	echo PHP_INT_MAX;
	echo "PHP_Int_Max";

	echo __LINE__;

} else {

	echo "Website Is Closed For Maintenance";

}