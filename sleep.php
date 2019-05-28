<?php

	/*
		sleep(seconds);
		usleep(Microseconds);
		time_sleep_until(time() + 5);
	*/

	function checkFile() {

		if (file_exists('osama.txt')) {

			echo 'Good File Is Found';

		} else {

			time_sleep_until(time() + 5);

			checkFile();

		}

	}

	echo checkFile();