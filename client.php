<?php
	session_start();
		
	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	if(session_is_registered(login_input_email)){
		
		$email = $_SESSION['email'];

		$sql = "SELECT * FROM users WHERE email='$email'";
		$result=mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Twixel Client - Greg Zanmiller</title>
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div class="header">
			<div class="top_header">
				<div class="left_header">
					<div class="logo">
						<a href="home.php"><img src="img/Twixel_03.png" alt="Twixel" /></a>
					</div>
					<div class="search_bar">
						<form action="#" method="get">
							<input type="text" name="search_box" class="search_box" />
							<input type="submit" name="submit" value="" class="search_btn" />
						</form>
					</div>
				</div>
				<div class="right_header">
					<div class="user_area">
						<a href="client.php" class="username_btn"><?php print $first_name." ".$last_name; ?></a>
						<a href="logout.php" class="logout">Logout</a>
					</div>	
				</div>
			</div>
		</div>
		
		<div class="menu_bar">
			<ul>
				<li><a href="home.php" class="link_background">Home</a></li>
				<li><a href="catalog.php" class="link_background">Store</a></li>
				<li><a href="contact.php" class="link_background">Contact</a></li>
			</ul>
		</div>
		
		<div id="client_body">
			<div id="upper_client">
				<div id="client_box">
					<p id="client_name"><?php print $first_name." ".$last_name; ?></p>
					<div id="client_history_button">
						<a href="history.php" id="client_history">View Order History</a>
					</div>
					<div id="client_payment_button">
						<a href="payment.php" id="client_payment">Change Payment Options</a>
					</div>
				</div>
				<div id="cart_area">
					<p id="cart_area_title">Your Cart:</p>
					
					<p id="client_cart_counter">You currently have 1 item in your cart</p>
					<a href="cart.php" id="client_cart_button">Click here to view your cart</a>
				</div>
			</div>
			<div id="lower_client">
				<div id="related_items">
					<h1 id="related_items_header">You May Also Like:</h1>
					
					<div id="related1">
						<?
							$connection = mysql_connect("localhost", "gr073607", "knights123!") or print "connection failed because ".mysql_error(); 
							mysql_select_db("gr073607", $connection) or print "select failed because ".mysql_error();

							$myquery = "SELECT * FROM products WHERE id > '1' AND id < 6";
							$result = mysql_query($myquery);

					 		while($row = mysql_fetch_array($result)) { 
								print "<div class='related_item'>";
								print "<img src='".$row['image']."' alt='Related Item Picture' class='related_picture' />";
								print "<p class='related_name'>".$row['name']."</p>";
								print "<p class='related_price'>$".$row['price']."</p>";
								print "<a href='cart.php' class='add_to_cart_btn'>Add to Cart</a>";
								print "</div>";
				 			} 
						?>
					</div>
				</div>
			</div>
		</div>
			
		<div class="footer">
			<div class="disclaimer">
				<p>This site is not official and is an assignment for a UCF Digital Media course.</p>
				<p>Designed by Greg Zanmiller</p>
			</div>
			<a href="admin.php" class="admin_link">Admin</a>
		</div>
	</body>
</html>