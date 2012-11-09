<?php
	session_start();

	$product_id = $_POST['product_id'];
	$title = $_POST['title'];
	$review = $_POST['review'];
	$rating = $_POST['rating'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");

	$sql="INSERT INTO product_reviews (product_id, title, review, rating) VALUES ('".$product_id."', '".$title."', '".$review."', '".$rating."')";

	if(!mysql_query($sql, $connection))
	{
		die('Error: '.mysql_error());
	}

	$_SESSION['product_page'] = "review_added";
	$_SESSION['product_id'] = $product_id;

	header("location:individualProduct.php");
?>