<?php
	session_start();
	$FName = $_POST['first_name'];
	$LName = $_POST['last_name'];
	$EMAIL = $_POST['email'];
	$PASSWORD = md5($_POST['password']);
	$ADDRESS = $_POST['address'];
	$CITY = $_POST['city'];
	$STATE = $_POST['state'];
	$ZIP = $_POST['zip'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="INSERT INTO users (id, first_name, last_name, email, password, address, city, state, zip) VALUES ('NULL', '".$FName."', '".$LName."', '".$EMAIL."', '".$PASSWORD."', '".$ADDRESS."', '".$CITY."', '".$STATE."', '".$ZIP."')";
	$result=mysql_query($sql);
	
	$_SESSION['email'] = $EMAIL;
	$_SESSION['logged_in'] = "yes";

	header("location:client.php");
?>