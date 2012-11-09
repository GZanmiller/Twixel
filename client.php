<?php 
  include 'includes/header.php';
?>
  <div class="spacer"></div>
  <div class="row">
    <div class="nine columns">
      <h1>Account</h1>
      <hr />
    </div>
    <div class="three columns">
      <?php include('includes/searchform.php'); ?>
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
		  <?php
			   print "
            <h4>".$first_name." ".$last_name."</h4>
          	<h4>".$email."</h4>
            <h4>".$address."</h4>
            <h4>".$city." ".$state." ".$zip."</h4>";

          if($adminStatus == true || $superStatus == true)
          {
            print "<div>
                    <p><a href='admin.php'>Admin Page</a></p>
                  </div>";
          }
      ?>
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
  <?php include('footer.php') ?>
  
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
