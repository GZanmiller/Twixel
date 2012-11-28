<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Twixel Admin - Greg Zanmiller</title>
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="top_header">
			<a href="home.php" id="admin_back_btn"></a>
			<h1 id="admin_title">Twixel Admin</h1>
		</div>
		
		<div id="admin_tasks_links">
			<a href="#" id="add_link" onclick="show_add_link()"></a>
			<a href="#" id="remove_link" onclick="show_remove_link()"></a>
			<a href="#" id="edit_link" onclick="show_edit_link()"></a>
		</div>
		
		<div id="admin_body">
			<div class="add_item_area">
				<form action="#" method="post" id="add_item_form">
					<fieldset class="signup_fieldset">
						<legend class="add_item_legend">Add Item</legend>
					</fieldset>
				
					<div class="add_item_section">
						<label class="add_item_label">Item Name:</label>
						<input type="text" name="item_name" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Item Description:</label>
						<input type="text" name="last_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Category:</label>
						<input type="text" name="email" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Sku:</label>
						<input type="text" name="password" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Stock:</label>
						<input type="text" name="item_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Cost:</label>
						<input type="text" name="last_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Price:</label>
						<input type="text" name="email" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Image Location:</label>
						<input type="text" name="password" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Weight:</label>
						<input type="text" name="password" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Size:</label>
						<input type="text" name="password" class="add_item_input" />
					</div>
				
					<input type="submit" name="Submit" value="Submit" class="add_item_submit" />
				</form>
			</div>
		
			<div class="add_item_area">
				<form action="#" method="post" id="remove_item_form">
					<fieldset class="signup_fieldset">
						<legend class="add_item_legend">Remove Item</legend>
					</fieldset>
				
					<div class="add_item_section">
						<label class="add_item_label">Item:</label>
						<select class="add_item_input">
							<option value="Adobe Photoshop CS6">Adobe Photoshop CS6</option>
							<option value="Adobe Illustrator CS6">Adobe Illustrator CS6</option>
						</select>
					</div>
				
					<input type="submit" name="Submit" value="Submit" class="add_item_submit" />
				</form>
			</div>
		
			<div class="add_item_area">
				<form action="#" method="post" id="edit_item_form">
					<fieldset class="signup_fieldset">
						<legend class="add_item_legend">Edit item</legend>
					</fieldset>
				
					<div class="add_item_section">
						<label class="add_item_label">Item</label>
						<select class="add_item_input">
							<option value="Adobe Photoshop CS6">Adobe Photoshop CS6</option>
							<option value="Adobe Illustrator CS6">Adobe Illustrator CS6</option>
						</select>
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Item Name:</label>
						<input type="text" name="item_name" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Item Description:</label>
						<input type="text" name="last_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Category:</label>
						<input type="text" name="email" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Sku:</label>
						<input type="text" name="password" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Stock:</label>
						<input type="text" name="item_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Cost:</label>
						<input type="text" name="last_name" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Price:</label>
						<input type="text" name="email" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Image Location:</label>
						<input type="text" name="password" maxlength="100" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Weight:</label>
						<input type="text" name="password" class="add_item_input" />
					</div>
					<div class="add_item_section">
						<label class="add_item_label">Size:</label>
						<input type="text" name="password" class="add_item_input" />
					</div>
				
					<input type="submit" name="Submit" value="Submit" class="add_item_submit" />
				</form>
			</div>
		</div>
		<div id="admin_footer">
			<div id="admin_disclaimer">
				<p>This site is not official and is an assignment for a UCF Digital Media course.</p>
				<p>Designed by Greg Zanmiller</p>
			</div>
		</div>
	</body>
</html>