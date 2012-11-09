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

  <title>Twixel Contact - Zachary Spear</title>
  
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

  <!-- Main Page Content and Sidebar -->

 <div class="row">
    <div class="nine columns">
      <h1>Contact</h1>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>

<div class="row">

    <!-- Contact Details -->
    <div class="nine columns">

      <h3>Get in Touch!</h3>
      <p>Shoot us an email, whether you've got a question, a concern, or just want to say hello. We'll get back to you as soon as we can. Keep in mind we're always busy working on great new products and upkeeping our current ones. So if we don't reply right away, don't worry.</p>

      <dl class="contained tabs">
        <dd class="active"><a href="#contactForm">Contact Our Company</a></dd>
        <dd><a href="#contactPeople">Specific Person</a></dd>
      </dl>

      <ul class="tabs-content contained">
        <li id="contactFormTab" class="active">
        <!--<form name="contactform" method="post" action="sendFormEmail.php">-->
          <div class="row collapse">
            <div class="two columns"><label class="inline">Your Name</label></div>
            <div class="ten columns"><input type="text" id="yourName" placeholder="Enoch Johnson" /></div>
          </div>
          <div class="row collapse">
            <div class="two columns"><label class="inline">Your Email</label></div>
            <div class="ten columns"><input type="text" id="yourEmail" placeholder="nucky@bootleg.org" /></div>
          </div>

          <label>What's up?</label>
          <textarea id="comments" rows="4"></textarea>

          <button type="submit" value="Submit" class="radius button">Submit</button>
        <!--</form>-->
        </li>

        <li id="contactPeopleTab">
          <ul class="block-grid five-up">
            <li><a href="mailto:yler.berry@knights.ucf.edu"><img src="img/contactImg/kyler.jpg" alt="kyler" /><br />Kyler Berry</a></li>
            <li><a href="mailto:mark_gorion@knights.ucf.edu"><img src="img/contactImg/mark.jpg" alt="mark" /><br />Mark Gorion</a></li>
            <li><a href="mailto:fmurrugarra@knights.ucf.edu"><img src="img/contactImg/fernando.jpg" alt="fernando" /><br />Fernando Murrugarra</a></li>
            <li><a href="mailto:spearzachary@gmail.com"><img src="img/contactImg/zack.jpg" alt="zack" /><br />Zack Spear</a></li>
            <li><a href="mailto:gzanmiller@knights.ucf.edu"><img src="img/contactImg/greg.jpg" alt="greg" /><br />Greg Zanmiller</a></li>
          </ul>
        </li>
      </ul>

    </div>



    <!-- Sidebar -->

    <div class="three columns">

      <h5>Map</h5>
      <p>
      	<a href="http://goo.gl/maps/51p6m" target="_blank"><img src="img/map.png" alt="map" /></a>
        <a href="http://goo.gl/maps/51p6m" target="_blank">View Larger Map</a>
      </p>

      <p>
        99 S. Eola Drive<br />
        Orlando, FL 32801
      </p>

    </div>

    <!-- End Sidebar -->


  <!-- End Main Content and Sidebar -->
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