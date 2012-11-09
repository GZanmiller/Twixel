<?php 
  include 'includes/header.php';
?>

  <div class="spacer"></div>
  <div class="row">
    <div class="twelve columns">
      <h1>Shopping Cart</h1>
      <hr />
    </div>
  </div>
    
  <div class="row">
      <div class="eight column">
        <div class="entry">
          <h3>Your Cart</h3>
          <br/>
          <p>Remove items from your cart or Check Out.</p>
          
          <table>
            <tr>
              <td class="title">Name</td>
              <td class="title">Author</td>
              <td class="title">Price</td>
              <td></td>
            </tr>
            <tr>
              <td>TRIM</td>
              <td>ElegantThemes</td>
              <td>$9</td>
              <td><a href="" title=""><span>&nbsp;-&nbsp;</span>Remove</a></td>
            </tr>
            <tr>
              <td>MyProduct</td>
              <td>ElegantThemes</td>
              <td>$9</td>
              <td><a href="" title=""><span>&nbsp;-&nbsp;</span>Remove</a></td>
            </tr>
          </table>
          <br />
          <p>
            <a class="feature-buy" href="pay.php" title="">Check Out</a> or
            <a href="catalog.php" title="">Continue Shopping</a>
          </p>


        </div>
        </div>
    <!-- beginning of sidebar -->
      <div class="four column">

        <?php include "includes/sidebar.php"; ?>

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
