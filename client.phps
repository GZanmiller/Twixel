<?php



?>
<!DOCTYPE html>

<!-- USED FOUNDATION HTML5 FRONT-END FRAMEWORK -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Twixel Client - Zachary Spear</title>
  
  <!-- IMPORT CSS -->
  
  <style type="text/css">
  	@import url("css/foundation.min.css");
	@import url("css/styles.css");
  </style>

  <link rel="icon" type="image/ico" href="favicon.ico" />

  <script src="js/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  
  <!-- Header and Nav -->
  
  <nav class="top-bar contain-to-grid">
    
    <ul>
      <!-- Title Area -->
      <li>
      	<a href="home.php"><img src="img/logo.svg" alt="logo" height="40" width="40" /></a>
      </li>
      <li class="name">
      	
        <h1>
          <a href="home.php">
            Twixel
          </a>
        </h1>
      </li>
    </ul>

    <section>
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li><a href="home.php">Home</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="catalog.php#adobePlugins">Products</a>
          <ul class="dropdown">
            <li><a href="catalog.php#adobePlugins">Adobe Plugins</a></li>
            <li><a href="catalog.php#adobeSoftware">Adobe Software</a></li>
            <li><a href="catalog.php#mayaPlugins">Maya Plugins</a></li>
            <li><a href="catalog.php#wordPressThemes">WordPress Themes</a></li>
            <li><a href="catalog.php#webAssets">Web Assets</a></li>
            <li><a href="catalog.php#sonySoftware">Sony Software</a></li>
          </ul>
        </li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="client.php">Account</a>
          <ul class="dropdown">
            <li><a href="client.php">Account Information</a></li>
            <li><a href="client.php#openOrders">Open Orders</a></li>
            <li><a href="client.php#pastOrders">Past Orders</a></li>
          </ul>
        <li class="divider"></li>
        <li><a href="cart.php">Cart (0)</a></li>
      </ul>
    </section>
  </nav>
  
  <!-- End Header and Nav -->
  <?php



  ?>
  <div class="row">
    <div class="nine columns">
      <h1>Account</h1>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>

  <div class="row">
    <div class="nine columns">
      <dl class="tabs">
        <dd class="active"><a href="#accountInfo">Account Information</a></dd>
        <dd><a href="#openOrders">Open Orders</a></dd>
        <dd><a href="#pastOrders">Past Orders</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="accountInfoTab">
          <p>Once logged in your information will show up here.
          <h4>Name</h4>
          <h4>Email Address</h4>
          <h4>Address</h4>
          <div>
            <p>If signed in as an Admin an option will appear for the admin view in the Account settings</p>
            <p><a href="admin.php">Admin Page</a></p>
          </div>
        </li>
        <li id="openOrdersTab">You have no open orders. Why not add something to your cart and checkout</li>
        <li id="pastOrdersTab">You have yet to order anything from us. That makes everyone at Twixel super sad.</li>
      </ul>
    </div>
    <div class="three columns">
      <p>
        <a href="#"><img src="http://lorempixel.com/400/280/technics/" alt="flareAd" /></a>
      </p>
      <p>
        <a href="#"><img src="http://lorempixel.com/400/280/sports/" alt="particlesAd" /></a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="panel">
        <h4>Stay up to date!</h4>
            
        <div class="row">
          <div class="nine columns">
            <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
          </div>
          <div class="three columns">
            <a href="#" class="radius button right">Sign-up</a>
          </div>
        </div>
      </div>
  </div>
  
  
  <!-- Footer -->
  
  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>This site is not official and is an assignment for a UCF Digital Media course
            <br />Designed By: Zachary Spear</p>
        </div>
        <div class="six columns">
          <ul class="link-list right">
            <li><a href="home.php">Home</a></li>
            <li><a href="catalog.php">Products</a></li>
            <li><a href="client.php">Account</a></li>
            <li><a href="cart.php">Cart (0)</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="js/jquery.js"></script>
  
  <script src="js/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="js/jquery.foundation.forms.js"></script>
  
  <script src="js/jquery.foundation.reveal.js"></script>
  
  <script src="js/jquery.foundation.orbit.js"></script>
  
  <script src="js/jquery.foundation.navigation.js"></script>
  
  <script src="js/jquery.foundation.buttons.js"></script>
  
  <script src="js/jquery.foundation.tabs.js"></script>
  
  <script src="js/jquery.foundation.tooltips.js"></script>
  
  <script src="js/jquery.foundation.accordion.js"></script>
  
  <script src="js/jquery.placeholder.js"></script>
  
  <script src="js/jquery.foundation.alerts.js"></script>
  
  <script src="js/jquery.foundation.topbar.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
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
