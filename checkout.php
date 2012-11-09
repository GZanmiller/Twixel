<?php 
  include 'includes/header.php';
?>
  <div class="spacer"></div>
  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  <div class="row">
    <div class="nine columns">
      <h1>Checkout</h1>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>
    
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">First Name</label></div>
      <div class="ten columns"><input type="text" id="firstName" placeholder="Enoch" /></div>
    </div>
  </div>
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">Last Name</label></div>
      <div class="ten columns"><input type="text" id="lastName" placeholder="Thompson" /></div>
    </div>
  </div>
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">Email</label></div>
      <div class="ten columns"><input type="text" id="email" placeholder="nucky@bootleger.org" /></div>
    </div>
  </div>
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">Address</label></div>
      <div class="ten columns"><input type="text" id="address" placeholder="27 Boardwalk Avenue" /></div>
    </div>
  </div>
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">City</label></div>
      <div class="ten columns"><input type="text" id="city" placeholder="Atlantic City" /></div>
    </div>
  </div>
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">State</label></div>
      <div class="ten columns"><input type="text" id="state" placeholder="New Jersey" /></div>
    </div>
  </div>
  <div class="row">
    <div class="nine columns">
      <div class="two columns"><label class="inline">Zip Code</label></div>
      <div class="ten columns"><input type="text" id="zipCode" placeholder="08401" /></div>
    </div>
  </div>

  <div class="row">
    <div class="nine columns">
      <p id="terms">Please read our <a href="terms.php">Terms and Conditions</a> before checking out</p>
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
