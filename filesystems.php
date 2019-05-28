<?php

$name = 'Osama';

if (is_dir($name)) {

	echo 'Sorry The Directory ' . $name . ' Is Exists No Need To Create It';

} else {

	mkdir($name);

	echo 'The Directory Name ' . $name . ' Is Created :)';

}


