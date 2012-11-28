<?php
	session_start();
	$FName = $_POST['first_name'];
	$LName = $_POST['last_name'];
	$EMAIL = $_POST['email'];
	$PASSWORD = $_POST['password'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	$sql="INSERT INTO users (id, first_name, last_name, email, password) VALUES ('NULL', '".$FName."', '".$LName."', '".$EMAIL."', '".$PASSWORD."')";
	$result=mysql_query($sql);
	
	$_SESSION['email'] = $EMAIL;
	
	session_register("login_input_email");
	session_register("login_input_password");
	header("location:client.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Twixel Signup - Greg Zanmiller</title>
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	<body>
	</body>
</html>