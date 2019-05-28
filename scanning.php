<?php

/*
	scandir(dir, sort, context)
*/

$link = __DIR__ . '/Osama';

$files = scandir($link, SCANDIR_SORT_NONE);

echo "<pre>";

print_r($files);

echo "</pre>";

foreach($files as $file) {

	if(is_file($link . "/" . $file)) {

		unlink($link . "/" . $file);

	}

}