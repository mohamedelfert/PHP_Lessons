<?php

/*
	Syntax

	function Identifier( $arg1, $arg2, $arg3 ) {
	
		// Function Body

		return;

	}

	Return Vs Echo

*/

$views = 150;

function increaseViews( $views ) {

	return $views + 1;

}

increaseViews($views);