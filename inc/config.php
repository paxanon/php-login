<?php

	// if there is no constant called __CONFIG__, do not load this file.
	if(!defined('__CONFIG__')){
			exit('You do not have a config file');
		}

	// Session always on
	if(!isset($SESSION)) {
		session_start();
	}

	// Config is below
	// Allow errors

	error_reporting(-1);
	// ini_set('display_errors', on);

	//include the DB.php
	require_once "classes/DB.php";
	require_once "classes/Filter.php";
	require_once "classes/User.php";
	require_once "classes/Page.php";
	require_once "functions.php";
	$con = DB::getConnection();

?>