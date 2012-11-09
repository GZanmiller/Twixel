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

  <title>Twixel Admin - Zachary Spear</title>

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
  
  <div class="row">
    <div class="three columns">
      <h1>Twixel Admin Page</h1>
    </div>
    <div class="nine columns">
      <ul class="nav-bar right">
        <li><a href="home.php">Home</a></li>
        <li><a href="catalog.php">Products</a></li>
      </ul>
    </div>
  </div>
  
  <!-- End Header and Nav -->
    <?php



  ?>
  <div class="row">    
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="six columns push-three">
      
      <!-- Feed Entry -->
      <div class="row">
        <div class="ten columns">
          <p>Here on the Admin Page you'll be able to manage the site with ease.</p>
          <ul>
            <li>Add and remove products</li>
            <li>Add and remove product categories</li>
            <li>Access customer profiles for customer support</li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
      
      <hr />
      
      <!-- Feed Entry -->
      <!-- End Feed Entry -->
      <!-- End Feed Entry -->
      
    </div>
    
    
    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="three columns pull-six">
      <div class="panel">
        <img src="img/admin.png" alt="admin" />
        
        <dl class="vertical tabs">
          <dd><a href="#">Product Add/Delete (coming soon)</a></dd>
          <dd><a href="#">Maintain User Accounts (coming soon)</a></dd>
          <dd><a href="#">Unprocessed Orders (coming soon)</a></dd>
          <dd><a href="#">Processed Orders (coming soon)</a></dd>
        </dl>
        
      </div>
    </div>
    
    
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="three columns hide-for-small">
      <p><img src="img/monitored.png" alt="monitored" /></p>
    </aside>
    
  </div>
    
  
  <!-- Footer -->
  
  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>&copy; This site is not official and is an assignment for a UCF Digital Media course</p>
          <p>Designed By: Zachary Spear</p>
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
</body>
</html>
