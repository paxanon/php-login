<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once "../inc/config.php"; 


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//Always return JSON format
		header('Content-Type: application/json');

		$return = [];

		$email = Filter::String($_POST['email'] );
		$password = $_POST['password'];

		$user_found = User::Find($email, true);

		if($user_found) {
			// User exists, try and sign them in.
			$user_id = (int) $user_found['user_id'];
			$hash = (string) $user_found['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
				$return ['redirect'] = '/dashboard.php';

				$_SESSION['user_id'] = $user_id;

			} else {
				// Invalid email password combo
				$return['error'] = "Invalid email / password combo";
			}

		} else {
			// User does not exist, Send them to the registration page.
			$return['error'] = "You do not have an account. <a href='/register.php'>Create on now?</a>";
		};

		echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		// Kill the script and redirect to register page.
		exit('INVALID URL');
	}
?>
