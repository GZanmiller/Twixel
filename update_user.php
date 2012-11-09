<?php
	session_start();
	$id = $_POST['id'];
	$FName = $_POST['first_name'];
	$LName = $_POST['last_name'];
	$EMAIL = $_POST['email'];
	$ADDRESS = $_POST['address'];
	$CITY = $_POST['city'];
	$STATE = $_POST['state'];
	$ZIP = $_POST['zip'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	$sql="UPDATE users SET first_name='$FName', last_name='$LName', email='$EMAIL', address='$ADDRESS', city='$CITY', state='$STATE', zip='$ZIP' WHERE id='$id'";
	$result=mysql_query($sql);

	header("location:admin.php#userAccounts");
?>