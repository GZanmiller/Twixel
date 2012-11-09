<?php 
  session_start();
  
  include 'includes/header.php';

  $dbhost = 'localhost';
  $dbuser = 'gr073607';
  $dbpass = 'knights123!';

  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if(! $conn ){
    die('Could not connect: ' . mysql_error());
  }

  $product_id = $_POST['product_id'];

  $sql = "SELECT * FROM products WHERE id='$product_id'";

  $retval = mysql_query( $sql, $conn );
  if(! $retval ){
    die('Could not get data: ' . mysql_error());
  }
  while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
  {
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
      <img src="<?php print $image; ?>" alt="<?php print $name; ?>" />
    </div>
    <div class="four columns panel">
      <h2>Stock: <?php print $stock; ?></h2>
      <h2>$<?php print $price; ?></h2>
      <a href="#">
      <div class="panel callout radius" align="center">
        <h4>Add to Cart</h4>
      </div>
      </a>
      <?php
      print "
      <div class='rating'>
        <a class='unlinked_button' >".$thumbs_up."<i class='foundicon-thumb-up'></i></a>
        <a class='unlinked_button' >".$thumbs_down."<i class='foundicon-thumb-down'></i></a>
      </div>
      ";
      ?>
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
      <div class="row panel">
        <h2>Product Overview</h2>
        <p><?php print $description; ?></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="eight columns">
        <h2>Product Reviews</h2>
      <div class="row panel">
        <h4>Title of Review</h4>
        <p>Bacon ipsum dolor sit amet meatball turkey jowl pork chuck short loin sirloin corned beef venison turducken beef ground round. Bresaola beef ribs meatloaf, filet mignon strip steak drumstick pastrami kielbasa turducken ball tip pig doner shankle short ribs beef. Tail pork loin chuck ball tip kielbasa jowl pastrami pork belly, pancetta tongue doner. Pancetta jowl prosciutto ham jerky tongue boudin sausage biltong ham hock swine strip steak drumstick. Strip steak tail swine, beef ribs ribeye drumstick chicken meatball bacon hamburger sirloin pancetta t-bone doner shankle.</p>
      </div>
      <div class="row panel">
        <h4>Title of Review</h4>
        <p>Shank pork belly chicken, brisket bresaola pig shankle pancetta boudin filet mignon bacon drumstick tail. Prosciutto beef ribs pig rump chicken pastrami bacon ham hock. Capicola kielbasa shankle flank, brisket frankfurter ball tip biltong drumstick jowl swine. Meatloaf biltong sirloin, shank sausage tongue bacon flank turkey shoulder pastrami frankfurter venison. Flank ball tip short loin, beef ribs bacon swine fatback andouille kielbasa jerky pig turducken.</p>
      </div>
      <div class="row panel">
        <h4>Title of Review</h4>
        <p>Capicola pork loin sausage spare ribs, salami corned beef bresaola. Swine filet mignon shankle biltong sirloin prosciutto, salami capicola tri-tip tail spare ribs pastrami. Flank jerky brisket cow, meatball t-bone spare ribs pork chop sausage ground round chicken beef boudin. Chuck leberkas kielbasa sirloin bresaola filet mignon. Fatback t-bone jowl shankle pig bacon tri-tip pancetta pork belly salami doner.</p>
      </div> 
    </div>
  </div>
<!-- Footer -->
  <?php include('footer.php') ?>
  
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