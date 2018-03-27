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
		$f_name = Filter::String($_POST['f_name'] );
		$l_name = Filter::String($_POST['l_name'] );

		$user_found = User::Find($email);

		if($user_found) {
			// User exists
			$return['error'] = "You already have an account!";
		} else {
			// User does not exist, add them now

			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$addUser = $con->prepare("INSERT INTO users(email, password, f_name, l_name) VALUES(LOWER(:email), :password, :f_name, :l_name)");
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->bindParam(':f_name', $f_name, PDO::PARAM_STR);
			$addUser->bindParam(':l_name', $l_name, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->lastInsertId();

			$_SESSION['user_id'] = (int) $user_id;

			$return['redirect'] = '/dashboard.php?message=welcome';
		};

		//make sure the user can be added AND is added

		echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		// Kill the script and redirect to register page.
		header("Location: /login.php"); exit;
	}
?>
