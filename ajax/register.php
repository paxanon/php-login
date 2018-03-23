<?php

	//allow the config
	define(__CONFIG__, true);
	//require the config
	require_once "../inc/config.php"; 


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//Always return JSON format
		header('Content-Type: application/json');

		$return = [];

		//make sure the user does not exist

		//make sure the user can be added AND is added

		// return the propper information back to js to redirect us

		$return['redirect'] = '/dashboard.php';
		$return['name'] = "Danny Svane";


		echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		// Kill the script and redirect to register page.
		exit('TEST');
	}
?>
