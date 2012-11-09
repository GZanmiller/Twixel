function upvoteItem($id) {

}

function downvoteItem($id) {
    
}

function show_signin() {

	if(document.getElementById("signin_form").style.visibility == 'visible')
	{
		document.getElementById("signin_form").style.visibility = 'hidden';
	}
	else {
		document.getElementById("signin_form").style.visibility = 'visible';
	}
	
	document.getElementById("signup_form").style.visibility = 'hidden';
}

function show_signup() {
	document.getElementById("signup_form").style.visibility = 'visible';
	document.getElementById("signin_form").style.visibility = 'hidden';
}

function hide_signup() {
	document.getElementById("signup_form").style.visibility = 'hidden';
}

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
		if(document.email.value.length == 0 || !document.email.value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}$/))
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
		if(document.password.value.length == 0 || !document.password.value.match(/^[a-zA-Z0-9._-]$/))
		{
			return false;
		}	
		else
		{
			return true;
		}
	}
	else if(name=="address")
	{	
		if(document.address.value.length == 0 || !document.password.value.match(/^[a-zA-Z0-9-]$/))
		{
			return false;
		}	
		else
		{
			return true;
		}
	}
	else if(name=="city")
	{	
		if(document.city.value.length == 0 || !document.password.value.match(/^[a-zA-Z0-9-]$/))
		{
			return false;
		}	
		else
		{
			return true;
		}
	}
	else if(name=="state")
	{	
		if(document.state.value == "")
		{
			return false;
		}	
		else
		{
			return true;
		}
	}
	else if(name=="zip")
	{	
		if(document.zip.value.length == 0 || !document.password.value.match(/^[0-9]$/))
		{
			return false;
		}	
		else
		{
			return true;
		}
	}
}
