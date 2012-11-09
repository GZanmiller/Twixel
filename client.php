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
    <div class="eight columns">
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
    <!-- beginning of sidebar -->
    <div class="four column">
      <?php include "includes/sidebar.php"; ?>
    </div>
    <!-- end of sidebar -->
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
