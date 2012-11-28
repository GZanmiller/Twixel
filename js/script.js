/* ---------------------------- Show Logins ------------------------------------*/
function show_login_home() {
	document.getElementById("login_screen_home").style.visibility = 'visible';
	document.getElementById("signup_area_home").style.visibility = 'hidden';
}

function show_login_catalog() {
	document.getElementById("login_screen_catalog").style.visibility = 'visible';
	document.getElementById("signup_area_catalog").style.visibility = 'hidden';
}

function show_login_about() {
	document.getElementById("login_screen_about").style.visibility = 'visible';
	document.getElementById("signup_area_about").style.visibility = 'hidden';
}

function show_login_contact() {
	document.getElementById("login_screen_contact").style.visibility = 'visible';
	document.getElementById("signup_area_contact").style.visibility = 'hidden';
}

/* ---------------------------- Hide Logins -----------------------------------*/

function hide_login_home() {
	document.getElementById("login_screen_home").style.visibility = 'hidden';
}

function hide_login_catalog() {
	document.getElementById("login_screen_catalog").style.visibility = 'hidden';
}

function hide_login_about() {
	document.getElementById("login_screen_about").style.visibility = 'hidden';
}

function hide_login_contact() {
	document.getElementById("login_screen_contact").style.visibility = 'hidden';
}

/* ---------------------------- Show Signup -----------------------------------*/

function show_signup_home() {
	document.getElementById("signup_area_home").style.visibility = 'visible';
	document.getElementById("login_screen_home").style.visibility = 'hidden';
}

function show_signup_catalog() {
	document.getElementById("signup_area_catalog").style.visibility = 'visible';
	document.getElementById("login_screen_catalog").style.visibility = 'hidden';
}

function show_signup_about() {
	document.getElementById("signup_area_about").style.visibility = 'visible';
	document.getElementById("login_screen_about").style.visibility = 'hidden';
}

function show_signup_contact() {
	document.getElementById("signup_area_contact").style.visibility = 'visible';
	document.getElementById("login_screen_contact").style.visibility = 'hidden';
}

/* ----------------------------- Hide Signup -----------------------------------*/

function hide_signup_home() {
	document.getElementById("signup_area_home").style.visibility = 'hidden';
}

function hide_signup_catalog() {
	document.getElementById("signup_area_catalog").style.visibility = 'hidden';
}

function hide_signup_about() {
	document.getElementById("signup_area_about").style.visibility = 'hidden';
}

function hide_signup_contact() {
	document.getElementById("signup_area_contact").style.visibility = 'hidden';
}

/* ------------------------------ Validate Data ---------------------------------*/

function validateData(name) {
	if(name=="first_name")
	{
		if(document.firstname.value.length == 0 || !document.firstname.value.match(/^[A-Za-z]+$/)) 
		{
			document.write("Form failed");
			return false;
		}
		else
		{
			return true;
		}
	}
	else if(name=="last_name")
	{		
		if(document.lastname.value.length == 0 || !document.lastname.value.match(/^[A-Za-z]+$/))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	else if(name=="email")
	{	
		if(document.email.value == 0 || !document.email.value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}$/))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	else if(name=="password")
	{	
		if(document.password.value == 0 || !document.password.value.match(/^[a-zA-Z0-9._-]$/))
		{
			return false;
		}	
		else
		{
			return true;
		}
	}
}

/* ------------------------------ Admin Page ---------------------------------*/

function show_add_link() {
	document.getElementById("add_item_form").style.visibility = 'visible';
	document.getElementById("remove_item_form").style.visibility = 'hidden';
	document.getElementById("edit_item_form").style.visibility = 'hidden';
}

function show_remove_link() {
	document.getElementById("add_item_form").style.visibility = 'hidden';
	document.getElementById("remove_item_form").style.visibility = 'visible';
	document.getElementById("edit_item_form").style.visibility = 'hidden';
}

function show_edit_link() {
	document.getElementById("add_item_form").style.visibility = 'hidden';
	document.getElementById("remove_item_form").style.visibility = 'hidden';
	document.getElementById("edit_item_form").style.visibility = 'visible';
}
