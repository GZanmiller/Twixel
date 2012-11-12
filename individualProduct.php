<?php
  include 'includes/mysql_connect.php';
  include 'includes/header.php';

  $reason_for_visiting = $_SESSION['product_page'];

  $product_name = $_POST['product_name'];
  if($reason_for_visiting == "search")
  {
    $sql = "SELECT * FROM products WHERE name='$product_name'";
  }
  else
  {
    $sql = "SELECT * FROM products WHERE name='$product_name'";
  }

  $retval = mysql_query( $sql, $connection );
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

      $product_id = $id;
  }

?>

<!-- End Header and Nav -->
<div class="spacer"></div>
<div class="row">
  <div class="two columns"></div>
  <div class="two columns"><h1><?php print $name; ?></h1></div>
  <div class="eight columns"></div>
</div>

<div class="row">
  <div class="two columns"></div>
  <div class="four columns">
    <?php print "<img src='".$image."' alt='".$name."' /> "; ?>
  </div>
  <div class="four columns panel">
    <h2>Stock: <?php print $stock; ?></h2>
    <h2>$<?php print $price; ?></h2>
    <div class="panel">
      <!-- <h4>Add to Cart</h4> -->
      <a class="added button radius" href="cart.php?action=add&id=<?php echo $product_id; ?> ">Add to Cart</a>
    </div>
  </div>
  <div class="two column"></div>
</div>

<div class="row">
  <div class="two columns"></div>
  <div class="eight columns">
    <div class="row panel">
      <h2>Product Overview</h2>
      <p><?php print $description; ?></p>
    </div>
  </div>
  <div class="two columns"></div>
</div>
<div class="row">
  <div class="two columns"></div>
  <div class="eight columns">
    <h2>Product Reviews</h2>

    <form action="add_review.php" method="post" accept-charset="utf-8">
      <?php print "<input type='hidden' name='product_id' value='".$id."' id='product_id' />"; ?>
      <fieldset>
        <p><h2>Title</h2>
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
          <input type="submit" class="radius button" value="Submit Review">
        </p>
      </fieldset>
    </form>
  </div>
  <div class="two columns"></div>
</div>
<div class="row">
  <div class="two columns"></div>
  <div class="eight columns">
    <?php

      $sql = "SELECT * FROM product_reviews WHERE product_id = '$id' ";
      $retval = mysql_query( $sql, $connection );

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
              print " <i class='foundicon-star'></i></i> ";
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
  <div class="two columns"></div>
</div>
<!-- Footer -->
<?php include('footer.php') ?>