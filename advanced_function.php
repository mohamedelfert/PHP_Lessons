<?php

/*
	[ 1 ] Function With Arguments
	[ 2 ] Function Inside Function
	[ 3 ] If, Else Condition
	[ 4 ] Comparison Operators
	[ 5 ] Concatenation
	[ 6 ] String Operators
	[ 7 ] Function Return
*/

function getTicket( $user, $age ) {

	$ticket = rand(5000, 1000000);

	if ( $age >= 30 ) {

		$msg  = "Hello " . $user . " Your Age Is " . $age . "<br>";
		$msg .= "You Are Qualified To Get A Ticket Congratz :)" . "<br>";
		$msg .= "Your Ticket ID Is [ <span>" . $ticket . "</span> ]";

	} else {

		$msg  = "Hello " . $user . " Your Age Is " . $age . "<br>";
		$msg .= "You Are Not Qualified To Get A Ticket Sorry :(";

	}

	return $msg;

}

$id = getTicket("Osama", 32);

function makeFrame( $element ) {

	$frame  = "<div class='nice-frame'>" . $element . "</div>";

	return $frame;

}

$myElement = makeFrame( getTicket("Osama", 32) );

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Advanced Function</title>
	<style>
		.nice-frame {
			padding:10px;
			text-align:center;
			width:400px;
			margin:20px auto;
			border-radius:10px;
			background-color:#EEE;
			border:1px solid #CCC;
			font-family:Tahoma, Arial;
			line-height:2;
		}

		.nice-frame span {
			font-weight:bold;
			color:#F00;
		}
	</style>
	</head>
	<body>
		<?php echo $myElement; ?>
	</body>
</html>