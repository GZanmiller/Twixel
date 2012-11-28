<?php
	session_start();
	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");

	$myusername=$_POST['login_input_email']; 
	$mypassword=$_POST['login_input_password']; 
	
	$sql="SELECT * FROM users WHERE email='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);
	
	$count=mysql_num_rows($result);
	
	if($count==1){
		$_SESSION['email'] = $myusername;
		session_register("login_input_email");
		session_register("login_input_password"); 
		header("location:client.php");
	}
	else {
		header("location:home.php");
		echo "Wrong Username or Password";
	}
?>