<?php 
  include 'includes/header.php';
  include 'includes/mysql_connect.php';
?>
  
  <div class="spacer"></div>

  <div class="row">
  	<div class="twelve columns">

  		<div id="signin">
  		    <form method='post' action='signin.php'>
            <h2>Login</h2>
  		      <input type='text' name='login_input_email' placeholder='Email' />
  		      <input type='password' name='login_input_password' placeholder='Password' />
  		      <input type='submit' value='Submit' class='radius button' />
  		      <a href="create_account.php" id='signup_link'>Sign up now!</a>
  		    </form>
  	  	</div>
  	</div>
  </div>

<!-- Footer -->
  <?php include('footer.php') ?>