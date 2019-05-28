<?php

	date_default_timezone_set('Asia/Riyadh'); // Set To Riyadh Timezone

	/*
		strtotime(date, now)
	*/

	$oldWay = time() + ( 9 * 24 * 60 * 60 );

	$newWay = strtotime('last Friday'); // + x [ Day / Week / Month / Year ]

	echo date('Y-m-d h:i:s', $newWay) . '<br>';