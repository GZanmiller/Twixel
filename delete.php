<?php 
	session_start();

	$product_id = $_POST['product_id'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	mysql_query("DELETE FROM products WHERE id=".$product_id."");

	header("location:admin.php#deleteProduct");
?>