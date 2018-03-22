<?php

	// if there is no constant called __CONFIG__, do not load this file.
	if(!defined('__CONFIG__')){
			exit('You do not have a config file');
		}

	// Config is below

	//Allow the footer
	define(ALLOW_FOOTER, true);

	//include the DB.php
	require_once "classes/DB.php";
	$con = DB::getConnection();

	?>