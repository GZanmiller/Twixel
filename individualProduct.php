<?php 
  session_start();

  $counter = 0;
  
  include 'includes/header.php';

  $dbhost = 'localhost';
  $dbuser = 'gr073607';
  $dbpass = 'knights123!';

  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if(! $conn ){
    die('Could not connect: ' . mysql_error());
  }

  $reason_for_visiting = $_SESSION['product_page'];

  if($reason_for_visiting == "view_product")
  {
    $product_id = $_POST['product_id'];
    $sql = "SELECT * FROM products WHERE id='$product_id'";
  }
  else if($reason_for_visiting == "search")
  {
    $_SESSION['product_page'] = 'view_product';
    $product_name = $_POST['search'];
    $sql = "SELECT * FROM products WHERE name='$product_name'"; 
  }
  else if($reason_for_visiting == "review_added")
  { 
    $_SESSION['product_page'] = 'view_product';
    $product_id = $_SESSION['product_id'];
    $sql = "SELECT * FROM products WHERE id='$product_id'"; 
  }

  $retval = mysql_query( $sql, $conn );
  if(! $retval ){
    die('Could not get data: ' . mysql_error());
  }
  while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
  {
      $id = $row['id'];
      $name = $row['name'];
      $description = $row['description'];
      $category = $row['category'];
      $stock = $row['stock'];
      $price = $row['price'];
      $image = $row['image'];
      $thumbs_up = $row['thumbs_up'];
      $thumbs_down = $row['thumbs_down'];
  }

?>

  <!-- End Header and Nav -->
  <div class="spacer"></div>
  <div class="row">
    <h1><?php print $name; ?></h1>
  </div>

  <div class="row">
    <div class="eight columns">
      <?php print "<img src='".$image."' alt='".$name."' /> "; ?>
    </div>
    <div class="four columns panel">
      <h2>Stock: <?php print $stock; ?></h2>
      <h2>$<?php print $price; ?></h2>
      <a href="#">
        <div class="panel callout radius" align="center">
          <h4>Add to Cart</h4>
        </div>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <div class="row panel">
        <h2>Product Overview</h2>
        <p><?php print $description; ?></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <h2>Product Reviews</h2>

      <form action="add_review.php" method="post" accept-charset="utf-8">
        <?php print "<input type='hidden' name='product_id' value='".$id."' id='product_id' />"; ?>
        <fieldset>
          <p><label for="title">Title</label>
            <input type="text" name="title" />
          </p>
          <p><label for="review">Review</label>
            <textarea name="review" rows="8" cols="40"></textarea>
          </p>
          <p><label for="rating">Rating</label>
            <input type="radio" name="rating" value="5" /> 5 
            <input type="radio" name="rating" value="4" /> 4
            <input type="radio" name="rating" value="3" /> 3 
            <input type="radio" name="rating" value="2" /> 2 
            <input type="radio" name="rating" value="1" /> 1
          </p>
          <p>
            <input type="submit" value="Submit Review">
          </p>
        </fieldset>
      </form>

      <?php

        $sql = "SELECT * FROM product_reviews WHERE product_id = '$id' ";
        $retval = mysql_query( $sql, $conn );

        if(! $retval ){
          die('Could not get data: ' . mysql_error());
        }
        while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
        {
            $title = $row['title'];
            $review = $row['review'];
            $rating = $row['rating'];

            print "
              <div class='row panel'>
                <h4>".$title."</h4>
                <p>
            ";

            for($i = 0; $i < $rating; $i++)
            {
                print " <i class='foundicon-thumb-up'></i> ";
            }

            print "
                </p>
                <p>".$review."</p>
              </div>
              <div class='catalog_border catalog_spacer'></div>
            ";

            $counter++;
        }

        if($counter == 0)
        {
          print "There are no reviews. Be the first to review this product!";
        }
      ?>
    </div>
  </div>
<!-- Footer -->
  <?php include('footer.php') ?>
