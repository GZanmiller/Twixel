<?php
session_start();
/*------------
*
* Header Template
*
--------------*/
//this is our connection to the db
include('includes/mysql_connect.php');
include('includes/functions.php');
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
  
  <nav class="top-bar fixed">

      <a class="logo left" href="home.php" title="Twixel">
        <img src="img/logo-b.png" alt="Twixel"/>
      </a>

      <section>
        <ul class="right">
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
                    <a href='login.php'>Login</a>
                   </li>";
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
        <li><a href="cart.php">Cart (<?php echo writeShoppingCart(); ?>)</a></li>
      </ul>
    </section>
  </nav>


  <!-- End Header and Nav -->
<?php?>