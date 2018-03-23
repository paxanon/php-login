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

		//make sure the user does not exist
		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1) {
			// User exists, try and sign them in.
			$User = $findUser->fetch(PDO::FETCH_ASSOC);

			$user_id = (int) $User['user_id'];
			$hash = (string) $User['password'];

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
