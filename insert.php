<?php 
	session_start();

	$name = $_POST['name'];
	$description = $_POST['description'];
	$category = $_POST['category'];
	$sku = $_POST['sku'];
	$stock = $_POST['stock'];
	$cost = $_POST['cost'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$thumbs_up = $_POST['thumbs_up'];
	$thumbs_down = $_POST['thumbs_down'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	$sql="INSERT INTO products (name, description, category, sku, stock, cost, price, image, thumbs_up, thumbs_down) VALUES ('".$name."', '".$description."', '".$category."', '".$sku."', '".$stock."', '".$cost."', '".$price."', '".$image."', '".$thumbs_up."', '".$thumbs_down."')";

	if(!mysql_query($sql, $connection))
	{
		die('Error: '.mysql_error());
	}

	header("location:admin.php");
?>