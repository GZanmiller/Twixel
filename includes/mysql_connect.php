<?php

	session_start();

	//Defines constants to use for our database connection
	DEFINE ('DB_USER', 'gr073607');
	DEFINE ('DB_PASSWORD', 'knights123!');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'gr073607'); //test DB for local development

	//this is our connection
	$connection = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	//define character set
	mysql_set_charset($connection, 'utf8');

	//cleans our urls
	/*function escape_data ($data) {
		global $connection;
		return mysqli_real_escape_string (trim ($data), $connection);
	}*/

	//test connection
	if(! $connection ){
	    die('Could not connect: ' . mysql_error());
	}
	
	//choose database
	$db_selected = mysql_select_db(DB_NAME);
	
	if($_SESSION['logged_in'] == "yes" && $_SESSION['email'] == "admin@twixel.com")
	{
		$first_name = "Twixel";
		$last_name = "Admin";
		$adminStatus = true;
		$superStatus = false;
		$regularStatus = false;
	}
	else if($_SESSION['logged_in'] == "yes" && $_SESSION['email'] == "super@twixel.com")
	{
		$first_name = "Twixel";
		$last_name = "Super";
		$adminStatus = false;
		$superStatus = true;
		$regularStatus = false;
	}
	else 
	{
		
		$email = $_SESSION['email'];
		
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result=mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$address = $row['address'];
			$state = $row['state'];
			$city = $row['city'];
			$zip = $row['zip'];
		}
	}

	//get page name
	function get_pageName() {
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = explode('/', $currentFile);
		$pageName = $parts[count($parts) - 1];
		$pageName = explode('.', $pageName);
		$pageName = $pageName[0];
		return $pageName;
	}

	$pageName = get_pageName();
?>