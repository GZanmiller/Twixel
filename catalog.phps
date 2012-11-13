<?php 
  include 'includes/header.php';
  include 'includes/mysql_connect.php';
?>

  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  <div class="spacer"></div>
  <div class="row">
    <div class="twelve columns">
      <h1>Products</h1>
      <h3>Our Best Sellers</h3>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="img/homeSliderImages/sliderFlares.png" width="1180" height="300" alt="sliderFlares" />
        <img src="img/homeSliderImages/sliderColorGrade.png" width="1180" height="300" alt="sliderColor" />
        <img src="img/homeSliderImages/sliderParticles.png" width="1180" height="300" alt="sliderParticles" />
        <img src="img/homeSliderImages/sliderTextEffects.png" width="1180" height="300" alt="sliderText" />
      </div>
    </div>
  </div>
  
  <!-- Three-up Content Blocks -->
  
  <div class="row">
    <div class="twelve columns">
      <h3>Product Categories</h3>
      <dl class="tabs">
        <dd class="active"><a href="#adobePlugins">Plugins</a></dd>
        <dd><a href="#designSoftware">Design Software</a></dd>
        <dd><a href="#audioRecording">Audio Recording</a></dd>
        <dd><a href="#hardware">Hardware</a></dd>
        <dd><a href="#webDevelopment">Web Development</a></dd>
        <dd><a href="#videoEditing">Video Editing</a></dd>
        <dd><a href="#wordpressThemes">Wordpress Themes</a></dd>
      </dl>
    </div>
  </div>

      <ul class="tabs-content">

        <li class="active" id="adobePluginsTab">

          <?php
            $counter = 0;
            $dbhost = 'localhost';
            $dbuser = 'gr073607';
            $dbpass = 'knights123!';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn ){
              die('Could not connect: ' . mysql_error());
            }

            $sql = 'SELECT * FROM products WHERE category = "plugin" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
            }
          ?>
        </li>
        
        <li id="designSoftwareTab">
          <?php
            
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "design_software" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
            }
          ?>
        </div>
        </li>
        <li id="audioRecordingTab">
          <?php
            
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "audio_recording" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
            }
          ?>
        </div>
        </li>
        <li id="hardwareTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "hardware" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
            }
          ?>
           </div>
        </li>
        <li id="webDevelopmentTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "web_development" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
            }
          ?>
           </div>
        </li>
        <li id="videoEditingTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "video_editing" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
              
            }
          ?>
           </div>
        </li>
        <li id="wordpressThemesTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "wordpress_themes" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {

               $counter++;

              $id = $row['id'];
              $name = $row['name'];
              $price = $row['price'];
              $image = $row['image'];

              if($counter%4 == 1)
              {
                echo "<div class='row cat'>";
              }

              echo "<div class='three columns catalog_items'>
                      <img src='".$image."' alt='".$name."' class='product_images' />
                      <h4>".$name."</h4>
                      <h5>&#36; ".$price."</h5>
                      <a href='individualProduct.php?name=".rawurlencode($name)."' class='radius button'>View Product</a>
                      </div> <!-- end cat items -->";

              if($counter%4 == 0)
              {
                echo "</div> <!-- end row -->";
              }
              
            }
          ?>
        </li>
      </ul>
    
  <!-- Footer -->
  <?php include('footer.php') ?>