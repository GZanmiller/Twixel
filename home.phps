  <?php



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

  <title>Twixel Home - Zachary Spear</title>
  
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

  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
    
  <div class="row">
    <div class="nine columns">
      <h1>Home</h1>
      <h2>Welcome to Twixel Creative and Media</h2>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <h3>This Month's Featured Plugins</h3>
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <div>
        <?php
          $dbhost = 'sulley.cah.ucf.edu';
          $dbuser = 'za086324';
          $dbpass = 'surfzap123';
          $conn = mysql_connect($dbhost, $dbuser, $dbpass);
          if(! $conn ){
            die('Could not connect: ' . mysql_error());
          }
          $sql = 'SELECT productImage, productName, price, description FROM products WHERE productID = "1" ';

          mysql_select_db('za086324');
          $retval = mysql_query( $sql, $conn );
          if(! $retval ){
            die('Could not get data: ' . mysql_error());
          }
          while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
              echo 
                 "<a href='catalog.php' ><img alt='featuredProduct' src='{$row['productImage']}' /></a>".
                 "<h4>{$row['productName']} only \${$row['price']}</h4>".
                 "<p>{$row['description']} </p> ";
          }
          mysql_close($conn);
        ?>
      </div>
      
    </div>
    <div class="six columns">
      <div>
        <?php
          $dbhost = 'sulley.cah.ucf.edu';
          $dbuser = 'za086324';
          $dbpass = 'surfzap123';
          $conn = mysql_connect($dbhost, $dbuser, $dbpass);
          if(! $conn ){
            die('Could not connect: ' . mysql_error());
          }
          $sql = 'SELECT productImage, productName, price, description FROM products WHERE productID = "2" ';

          mysql_select_db('za086324');
          $retval = mysql_query( $sql, $conn );
          if(! $retval ){
            die('Could not get data: ' . mysql_error());
          }
          while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
              echo 
                 "<a href='catalog.php' ><img alt='featuredProduct' src='{$row['productImage']}' /></a>".
                 "<h4>{$row['productName']} only \${$row['price']}</h4>".
                 "<p>{$row['description']} </p> ";
          }
          mysql_close($conn);
        ?>
      </div>
      
    </div>
  </div>
  <!-- Three-up Content Blocks -->
  
  <div class="row">
    <h3>"Great News Everyone"</h3>

    <div class="four columns">
      <img src="img/responsive.png" alt="greatNews" />
      <h4>Our site is responsive!</h4>
      <p>Check out our site on your smartphone! It automatically resizes everything to fit the width of the screen. It's pretty awesome if you ask me.
         As before, we are still a bit aways from releasing all of our products. 
        In the meantime checkout the products that we do have over at the <a href="catalog.php">Products Page.</a></p>  
      <p><em>Posted: 01 Oct 2012 @ 23:49</em></p>
    </div>

    <div class="four columns">
      <img src="img/html5.png" alt="finally" />
      <h4>We are finally live!</h4>
      <p>After all these weeks we finally have the website up and running. 
        It's been a long few months developing all the plugins, themes, fonts, and everything else we have to offer. 
        Unfortunately only the plugins for Adobe Software are ready to go. 
        It may be a month or two before all the products are ready to purchase</p>
      <p><em>Posted: 25 Sept 2012 @ 16:32</em></p>
    </div>
    
    <div class="four columns">
      <img src="img/hey.jpg" alt="hey" />
      <h4>We're finally doing this.</h4>
      <p>I know this won't be seen by anyone but the development team until the site is ready to launch but we are all excited.
        Hey Dev Team, what's up? Come by my office and say, "Hello."</p>
      <p><em>Posted: 21 Sept 2012 @ 13:31</em></p>
    </div>
    
  </div>
  
  
  <!-- Call to Action Panel -->
  <div class="row">
    <div class="twelve columns">
    
      <div class="panel">
        <h4>Get in touch!</h4>
            
        <div class="row">
          <div class="nine columns">
            <p>We love our customers and we'd love to hear from you.</p>
          </div>
          <div class="three columns">
            <a href="contact.php" class="radius button right">Contact Us</a>
          </div>
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
