<?php

	// if there is no constant called __CONFIG__, do not load this file.
	if(!defined('__CONFIG__')){
			exit('You do not have a config file');
		}

	// Config is below

	//include the DB.php
	require_once "classes/DB.php";
	$con = DB::getConnection();

	?>