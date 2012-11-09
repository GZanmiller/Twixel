<?php
	session_start();
	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");

	$myusername=$_POST['login_input_email']; 
	$mypassword=md5($_POST['login_input_password']);

	$mypasswordAdmin=md5("high^five");
	$mypasswordSuper=md5("UPPER~CASE"); 
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	if($myusername == "Admin" && $mypassword == $mypasswordAdmin) 
	{
		$_SESSION['email'] = "admin@twixel.com";
		$_SESSION['logged_in'] = "yes";
		header("location:client.php");
	}
	else if($myusername == "Super" && $mypassword == $mypasswordSuper)
	{
		$_SESSION['email'] = "super@twixel.com";
		$_SESSION['logged_in'] = "yes";
		header("location:client.php");
	}
	else 
	{
		$sql="SELECT password FROM users WHERE email='$myusername'";
		$result=mysql_query($sql);

		$dbarray = mysql_fetch_array($result);

		if($password == $dbarray['password']) {
			return 0;
		}
		
		$count=mysql_num_rows($result);
		
		if($count==1){
			$_SESSION['email'] = $myusername;
			$_SESSION['logged_in'] = "yes";
			header("location:client.php");
		}
		else {
			header("location:home.php");
			echo "Wrong Username or Password";
		}
	}
?>