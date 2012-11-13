<?php 
  include 'includes/header.php';
  include 'includes/mysql_connect.php';
?>
  <div class="spacer"></div>
  <div class="row">
    <div class="nine columns">
      <h1>Account</h1>
      <hr />
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
