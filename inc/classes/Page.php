<?php

// if there is no constant called __CONFIG__, do not load this file.
if(!defined('__CONFIG__')){
exit('You do not have a config file');
}


class Page {

	//Force the user to be logged in and redirect if not

	static function ForceLogin() {

		if(isset($_SESSION['user_id'])) {
			// user is allowed here
		} else {
			// user is not logged in yet
			header("Location: /login.php"); exit;
		}
	}

	static function ForceDashboard() {

		if(isset($_SESSION['user_id'])) {
			// Force user to dashboard
			header("Location: /dashboard.php"); exit;
		} else {
			// keep going on the page
		}
	}
}
?>