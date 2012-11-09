<?php 
  include 'includes/header.php';
?>
  
  <div class="spacer"></div>

  <div class="row">
	<div class="twelve columns">
		<div id="signin_form">
		    <form method='post' action='signin.php'>

		      <legend class="signup_legend">Log In</legend>

		      <input type='text' name='login_input_email' placeholder='Email' />
		      <input type='password' name='login_input_password' placeholder='Password' />
		      <input type='submit' value='Submit' class='radius button' />
		      <a class="unlinked_button" id='signup_link' onclick='show_signup()'>Sign up now!</a>
		    </form>
	  	</div>
	</div>
  </div>

<!-- Footer -->
  <?php include('footer.php') ?>

  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="js/app.js"></script>

  <script type="text/javascript">
     $(window).load(function() {
         $('#slider').orbit();
     });
  </script>
  
</body>
</html>