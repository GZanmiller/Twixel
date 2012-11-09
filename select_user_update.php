<?php
	session_start();
	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");

	$selected_user=$_POST['selected_user']; 

	$_SESSION['selected_user_id'] = $selected_user;

	header("location:admin.php#userAccounts");
?>