<?php
/*------------
*
* Header Template
*
--------------*/
//this is our connection to the db
include('includes/mysql_connect.php');
?>

<!DOCTYPE html>

<!-- USED FOUNDATION HTML5 FRONT-END FRAMEWORK -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en">
 <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Twixel</title>
  
  <!-- IMPORT CSS -->
  
  <style type="text/css">
    @import url("css/foundation.min.css");
    @import url("css/styles.css");
  </style>

  <link rel="icon" type="image/ico" href="favicon.ico" />

  <script src="js/modernizr.foundation.js"></script>
  <script src="js/custom.js" type="text/javascript"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

</head>
<body>
  
  <!-- Header and Nav -->
  
  <nav class="top-bar">
    <div class="row">
      <a class="logo two column" href="home.php" title="Twixel">
        <img src="img/logo-b.png" alt="Twixel"/>
      </a>

      <div class="search_area six column">
        <?php include('includes/searchform.php'); ?>
      </div>

      <!-- Right Nav Section -->
      <ul class="four column">
        <li><a href="home.php">Home</a></li>
        <li class="has-dropdown">
          <a href="catalog.php#adobePlugins">Products</a>
          <ul class="dropdown">
            <li><a href="catalog.php#adobePlugins">Adobe Plugins</a></li>
            <li><a href="catalog.php#designSoftware">Design Software</a></li>
            <li><a href="catalog.php#audioRecording">Audio Recording</a></li>
            <li><a href="catalog.php#hardware">Hardware</a></li>
            <li><a href="catalog.php#webDevelopment">Web Development</a></li>
            <li><a href="catalog.php#videoEditing">Video Editing</a></li>
            <li><a href="catalog.php#wordpressThemes">Wordpress Themes</a></li>
          </ul>
        </li>
        <?php
          if($_SESSION["logged_in"] != "yes")
          {
            print "<li>
                    <a onclick='show_signin()' class='unlinked_button'>Login</a>
                   </li>";
                          /*<form method='post' action='signin.php' class='login-form'>
                            <input type='text' name='login_input_email' placeholder='Email' />
                            <input type='password' name='login_input_password' placeholder='Password' />
                            <input type='submit' value='Submit' class='radius button' />
                            <a href='#' id='signup_link' onclick='show_signup()'>Sign up now!</a>
                          </form>*/
          }
          else {
            print "
              <li class='has-dropdown'>
                <a href='client.php'>Account</a>
                <ul class='dropdown'>
                  <li><a href='client.php'>Account Information</a></li>
                  <li><a href='client.php#openOrders'>Open Orders</a></li>
                  <li><a href='client.php#pastOrders'>Past Orders</a></li>
                  <li><a href='logout.php'>Logout</a></li>
                </ul>
              </li>";
          }
        ?>
        <li><a href="cart.php">Cart (0)</a></li>
      </ul>
    </div>
  </nav>

  <div id="signin_form">
    <form method='post' action='signin.php'>

      <legend class="signup_legend">Log In</legend>

      <input type='text' name='login_input_email' placeholder='Email' />
      <input type='password' name='login_input_password' placeholder='Password' />
      <input type='submit' value='Submit' class='radius button' />
      <a class="unlinked_button" id='signup_link' onclick='show_signup()'>Sign up now!</a>
    </form>
  </div>

  <div id="signup_form">

    <form action="signup.php" class="signup_form" method="post" onsubmit="validateData()">

      <legend class="signup_legend">Sign Up</legend>
      
      <div class="signup_section">
        <input type="text" name="first_name" class="signup_input" maxlength="30" placeholder="First Name" />
        <input type="text" name="last_name" class="signup_input" maxlength="30" placeholder="Last Name" />
        <input type="text" name="email" class="signup_input" maxlength="50" placeholder="Email" />
        <input type="password" name="password" class="signup_input" maxlength="20" placeholder="Password" />
        <input type="text" name="address" class="signup_input" maxlength="30" placeholder="Address" />
        <fieldset class="signup_fieldset">
          <input type="text" name="city" class="signup_city" maxlength="20" placeholder="City" />
          <select class="signup_state" name="state">
            <option value="">State</option>

            <?php 

            $states = array(
              "AK", "AL", "AR", "AZ", "CA", "CO", "CT", "DC",  
              "DE", "FL", "GA", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA",  
              "MA", "MD", "ME", "MI", "MN", "MO", "MS", "MT", "NC", "ND", "NE",  
              "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "RI", "SC",  
              "SD", "TN", "TX", "UT", "VA", "VT", "WA", "WI", "WV", "WY"
              );

            for($i; $i < count($states); $i++) {echo "<option value='" . $states[$i] . "'>" . $states[$i] . "</option>";}
            ?>

          </select>
          <input type="text" name="zip" class="signup_zip" maxlength="5" placeholder="Zip" />
        </fieldset>
      </div>
      
      <input type="submit" name="Submit" value="Submit" class="radius button" />
      <a class="signup_cancel unlinked_button" onclick="hide_signup()">Cancel</a>
    </form>
  </div>

  <!-- End Header and Nav -->
<?php?>