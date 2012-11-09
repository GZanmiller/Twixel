<?php
  //this is our connection to the db
  include('includes/mysql_connect.php');
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
  <script type="text/javascript" src="js/custom.js"></script>

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

  <div class="row">    
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="six columns push-three">
      
      <!-- Feed Entry -->
      <div class="row">
        <div class="ten columns">
          <ul class="tabs-content">

            <li class="active" id="addProductTab">
              <form action="insert.php" method="post">
                <fieldset class="signup_fieldset">
                  <h1>Add Item</h1>
                </fieldset>
              
                <input type="text" name="name" maxlength="100" class="add_item_input" placeholder="Item Name" />
                <input type="text" name="description" class="add_item_input" placeholder="Item Description" />

                <select name="category" class="item_category">
                  <option value="audio_recording">Audio Recording</option>
                  <option value="design_software">Design Software</option>
                  <option value="hardware">Hardware</option>
                  <option value="plugin">Plugin</option>
                  <option value="video_editing">Video Editing</option>
                  <option value="web_development">Web Development</option>
                  <option value="wordpress_themes">Wordpress Themes</option>
                </select>

                <input type="text" name="sku" class="add_item_input" placeholder="Sku" />
                <input type="text" name="stock" class="add_item_input" placeholder="Stock" />
                <input type="text" name="cost" class="add_item_input" placeholder="Cost" />
                <input type="text" name="price" class="add_item_input" placeholder="Price" />
                <input type="text" name="image" maxlength="100" class="add_item_input" placeholder="Image Location" />
              
                <input type="hidden" name="thumbs_up" value="0" />
                <input type="hidden" name="thumbs_down" value="0" />
                <input type="submit" name="Submit" value="Add Item" class="radius button" />
              </form>
            </li>



            <li id="deleteProductTab">
              <form action="delete.php" method="post" id="add_item_form">
                <fieldset class="signup_fieldset">
                  <h1>Delete Item</h1>
                </fieldset>
              
                <select id="delete_select" name="product_id">
                  <option value="">Select an Item</option>
                  <?php 
                    $dbhost = 'localhost';
                    $dbuser = 'gr073607';
                    $dbpass = 'knights123!';

                    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                    if(! $conn ){
                      die('Could not connect: ' . mysql_error());
                    }

                    $sql = 'SELECT * FROM products';

                    $retval = mysql_query( $sql, $conn );
                    if(! $retval ){
                      die('Could not get data: ' . mysql_error());
                    }
                    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                    {
                        $id = $row['id'];
                        $name = $row['name'];

                        print "<option value='".$id."'>".$name."</option>";
                    }
                  ?>
                </select>
                  
                <input type="submit" name="Submit" value="Delete Item" class="radius button" />
              </form>
            </li>



            <li id="userAccountsTab">

              <form action="select_user_update.php" method="post" id="add_item_form">
                <fieldset class="signup_fieldset">
                  <h1>User Accounts</h1>
                </fieldset>
                
                <select name="selected_user" class="item_category" onchange="this.form.submit()">
                  <option value="" selected="selected">Select a User</option>
                  
                  <?php 

                    $sql = 'SELECT * FROM users';

                    $retval = mysql_query( $sql, $conn );
                    if(! $retval ){
                      die('Could not get data: ' . mysql_error());
                    }

                    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                    {
                        $id = $row['id'];
                        $first_name_find = $row['first_name'];
                        $last_name_find = $row['last_name'];

                        print "<option value='".$id."''>".$first_name_find." ".$last_name_find."</option>";
                    }
                  ?>
                </select>
              </form>

              <form action="update_user.php" method="post" id="edit_user_form">

                <fieldset class="signup_fieldset">
                  <h1>Edit User</h1>
                </fieldset>
              
                <?php

                  $selected_user = $_SESSION['selected_user_id'];

                  $sql = "SELECT * FROM users WHERE id = '$selected_user' ";

                  $retval = mysql_query( $sql, $conn );
                  if(! $retval ){
                    die('Could not get data: ' . mysql_error());
                  }

                  while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                  {
                      $id = $row['id'];
                      $first_name_selected = $row['first_name'];
                      $last_name_selected = $row['last_name'];
                      $email_selected = $row['email'];
                      $address_selected = $row['address'];
                      $city_selected = $row['city'];
                      $state_selected = $row['state'];
                      $zip_selected = $row['zip'];

                  }

                   print " 
                      <input type='hidden' name='id' value='".$id."' />
                      <input type='text' name='first_name' maxlength='100' value='".$first_name_selected."' />
                      <input type='text' name='last_name' value='".$last_name_selected."' />
                      <input type='text' name='email' value='".$email_selected."' />
                      <input type='text' name='address' value='".$address_selected."' />
                      <input type='text' name='city'  value='".$city_selected."' />
                      <input type='text' name='state' maxlength='100' value='".$state_selected."' />
                      <input type='text' name='zip' maxlength='5' value='".$zip_selected."' />
                    ";
                ?>
                  
                <input type="submit" name="Submit" value="Update User" class="radius button" />
              </form>

              <form action="delete_user.php" method="post" id="delete_user_form">
                <input type="submit" name="Submit" value="Delete User" class="radius button right" />
              </form>
            </li>

            <li id="unprocessedOrdersTab">View Unprocessed Orders</li>

            <li id="processedOrdersTab">View Processed Orders</li>
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
          <dd class="active"><a href="#addProduct">Add Product</a></dd>
          <dd><a href="#deleteProduct">Delete Product</a></dd>
          <dd><a href="#userAccounts">Maintain User Accounts</a></dd>
          <dd><a href="#unprocessedOrders">Unprocessed Orders</a></dd>
          <dd><a href="#processedOrders">Processed Orders</a></dd>
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
