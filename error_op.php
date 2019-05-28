<?php

// [ @ ] Error Control Operator

// $file = @fopen("Ahmed.txt", "r") or die("This File Is Not Found");

// (@include("increase.php")) or die ("This File Is Not Here");

$server = "localhost";
$user	= "Osama";
$pass	= "HelloPHP";
$db		= "OurDatabase";

@mysqli_connect($server, $user, $pass, $db) or die("Theres Something Wrong With Connection");