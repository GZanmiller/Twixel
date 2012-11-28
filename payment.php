<?php
	session_start();
		
	$connection = mysql_connect("sulley.cah.ucf.edu", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");

	$sql = "SELECT * FROM users WHERE id='1'";
	$result=mysql_query($sql);
	
	while($row = mysql_fetch_array($result))
	{
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Twixel Payment - Greg Zanmiller</title>
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
		
		<div id="payment_body">
			<div class="add_item_area">
				<form action="client.php" method="post" id="change_payment_form">
					<fieldset class="signup_fieldset">
						<legend class="add_item_legend">Enter Card Info:</legend>
					</fieldset>
				
					<div class="add_item_section">
						<label class="add_item_label">Card Type:</label>
						<select class="add_item_input">
							<option value="Visa">Visa</option>
							<option value="Mastercard">Mastercard</option>
						</select>
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Name:</label>
						<input type="text" name="item_name" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Card Number:</label>
						<input type="text" name="last_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Security Code:</label>
						<input type="text" name="email" maxlength="3" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Date:</label>
						<select class="payment_date_input">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<select class="payment_date_input">
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
						</select>
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Address:</label>
						<input type="text" name="email" maxlength="50" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">City:</label>
						<input type="text" name="email" maxlength="50" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">State:</label>
						<select class="payment_date_input">
							<option value="AL">AL</option>
							<option value="AS">AS</option>
							<option value="AR">AR</option>
							<option value="AK">AK</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CN">CN</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
						</select>
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Zip:</label>
						<input type="text" name="email" maxlength="5" class="add_item_input" />
					</div>
				
					<input type="submit" name="Submit" value="Submit" class="payment_submit" />
				</form>
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