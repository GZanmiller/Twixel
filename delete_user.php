<?php 
	session_start();

	$user_id = $_SESSION['selected_user_id'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	mysql_query("DELETE FROM users WHERE id=".$user_id."");

	header("location:admin.php#userAccounts");
?>