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


function FindUser($con, $email, $return_assoc = false) {
	//make sure the user does not exist
	$email = (string) Filter::String( $email );

	$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
	$findUser->bindParam(':email', $email, PDO::PARAM_STR);
	$findUser->execute();

	if($return_assoc) {
		return $findUser->fetch(PDO::FETCH_ASSOC);
	}

	$user_found = (boolean) $findUser->rowCount();

	return $user_found;
}
?>