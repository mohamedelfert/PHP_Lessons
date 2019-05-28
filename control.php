<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$admins = array("Osama", "Hassan", "Sayed");

	$username = $_POST['username'];

	if (in_array($username, $admins)) {

		echo "Welcome " . $username . " To Control Panel For Admin";

	} else {

		echo "Sorry This Username Is Not Exist In Our Client Area";

	}

} else {

	echo 'Sorry You Cant Browse This Page Directly';

}

