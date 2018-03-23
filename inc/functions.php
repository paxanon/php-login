<?php

//Force the user to be logged in and redirect if not

function ForceLogin() {

	if(isset($_SESSION['user_id'])) {
		// user is allowed here
	} else {
		// user is not logged in yet
		header("Location: /login.php"); exit;
	}
}

function ForceDashboard() {

	if(isset($_SESSION['user_id'])) {
		// Force user to dashboard
		header("Location: /dashboard.php"); exit;
	} else {
		// keep going on the page
	}
}
?>