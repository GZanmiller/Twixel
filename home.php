<?php 
  include 'includes/header.php';
?>
    <div class="spacer"></div>
    <div class="row">
      <div class="twelve columns">
        <h1>Welcome to Twixel Creative and Media</h1>
        <h3>This Month's Featured Plugins</h3>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <div>
          <?php
            $dbhost = 'localhost';
            $dbuser = 'gr073607';
            $dbpass = 'knights123!';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn ){
              die('Could not connect: ' . mysql_error());
            }
            $sql = 'SELECT image, name, price, description FROM products WHERE id = "1" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
                echo 
                   "<a href='catalog.php' ><img alt='featuredProduct' src='{$row['image']}' /></a>".
                   "<h4>{$row['name']} only \${$row['price']}</h4>".
                   "<p>{$row['description']} </p> ";
            }
            mysql_close($conn);
          ?>
          <hr />
        </div>
        
      </div>
      <div class="six columns">
        <div>
          <?php

            $sql = 'SELECT image, name, price, description FROM products WHERE id = "2" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
                echo 
                   "<a href='catalog.php' ><img alt='featuredProduct' src='{$row['image']}' /></a>".
                   "<h4>{$row['name']} only \${$row['price']}</h4>".
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
      <hr />
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
