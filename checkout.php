<?php 
  include 'includes/header.php';
  include 'includes/mysql_connect.php';
?>
  <div class="spacer"></div>
  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  <div class="row">
    <div class="eight columns">
      <h1>Checkout</h1>
      <hr />
    </div>
  </div>
  <?php
    if($_SESSION['logged_in'] == "yes")
    {
        print "
            <div class='row'>
              <div class='four columns'>
                <h4>".$first_name." ".$last_name."</h4>
                <h4>".$email."</h4>
                <h4>".$address."</h4>
                <h4>".$city." ".$state." ".$zip."</h4>

                <form action='http://www.paypal.com' method='post'>
                  <input type='submit' name='submit' value='Checkout' class='radius button' />
                </form>
              </div>
              <div class='four columns'></div>
              <div class='four columns'>";
                  include "includes/sidebar.php";
              print "</div>
              </div>";
    }
    else 
    {?>
      <div class="row">
        <div class="eight columns">
          <form action="http://www.paypal.com" method="post">
            <label>First Name</label>
            <input type="text" id="firstName" placeholder="Enoch" />
            
            <label>Last Name</label>
            <input type="text" id="lastName" placeholder="Thompson" />
           
            <label>Email</label>
            <input type="text" id="email" placeholder="nucky@bootleger.org" />
            
            <label>Address</label>
            <input type="text" id="address" placeholder="27 Boardwalk Avenue" />
            
            <label>City</label>
            <input type="text" id="city" placeholder="Atlantic City" />
            
            <label>State</label>
            <input type="text" id="state" placeholder="New Jersey" />
            
            <label>Zip Code</label>
            <input type="text" id="zipCode" placeholder="08401" />
            
            <input type="submit" value="Checkout" name="submit" class="radius button" />
          </form>

          <p id="terms">Please read our <a href="terms.php">Terms and Conditions</a> before checking out</p>        
        </div>
        <div class="four columns">
          <?php include ("includes/sidebar.php"); ?>
        </div>
      </div>
  <?php
    }
    
    include('footer.php') ?>