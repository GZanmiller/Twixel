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
		<title>Twixel Cart - Greg Zanmiller</title>
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
					<?php 
						if(session_is_registered(login_input_email))
						{
							print "<div class='login_area'>
								<a href='#' class='login_btn' onclick='show_login_home()'>Login</a>
								<a href='#' class='signup' onclick='show_signup_home()'>Sign Up</a>
							</div>";
						}
						else
						{
							print "<div class='user_area'>
								<a href='client.php' class='username_btn'>".$first_name." ".$last_name."</a>
								<a href='logout.php' class='logout'>Logout</a>
							</div>";
						}
					?>
				</div>
				<div id="login_screen_home">
					<form class="login_form" method="post" action="signin.php">
						<div class="login">
							<label class="login_label_email">Email: </label>
							<input type="text" name="login_input_email" id="login_input_email" class="login_box" />
						
							<label class="login_label_password">Password: </label>
							<input type="password" name="login_input_password" id="login_input_password" class="login_box" />
						</div>
						<div class="submit">
							<input type="submit" value="Submit" class="login_button" />
							<a href="#" class="signin_cancel" onclick="hide_login_home()">Cancel</a>
						</div>
					</form>
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
		
		<div id="cart_body">
			<div id="top_cart">
				<p id="cart_header">Shopping Cart:</p>
				<a href="checkout.php" id="checkout_btn">Checkout</a>
			</div>
			
			<div id="cart_items">
				<?
					$connection = mysql_connect("localhost", "gr073607", "knights123!") or print "connection failed because ".mysql_error(); 
					mysql_select_db("gr073607", $connection) or print "select failed because ".mysql_error();
					
					$myquery = "SELECT * FROM products WHERE id='1'";
					$result = mysql_query($myquery);
				
				 	while($row = mysql_fetch_array($result)) {
						print "<div class='cart_item'>";
						print 	"<div id='cart_left'>
									<img src='".$row['image']."' alt='cart_image' id='cart_image' />
								</div>";
						print 	"<div id='cart_right'>";
						print 		"<p id='cart_name'>".$row['name'].": <br />$".$row['price']."</p>";
						print	"</div>
							  </div>";
			 		} 
				?>
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