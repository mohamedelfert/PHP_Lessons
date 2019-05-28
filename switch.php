<?php

	/*
		switch(Expression) {
	
			Case:
			// Code
			Break;

		}
	*/

	$browser = "Google Chrome";

	switch($browser) {

		case "Firefox":
		case "Mozilla Firefox":
		echo "Your Favourite Browse Is Firefox";
		break;

		case "Google Chrome":
		case "Chrome":
		case "Chromium":
		echo "Your Favourite Browser Is Google Chrome This Is The Best";
		break;

		case "Opera":
		echo "Your Favourite Browser Is Opera";
		break;

		default:
		echo "Your Favourite Browse Is Not Here";

	}