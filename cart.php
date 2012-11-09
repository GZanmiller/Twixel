<?php 
  include 'includes/header.php';

$cart = $_SESSION['cart'];
$action = $_GET['action'];
switch ($action) {
  case 'add':
    if ($cart) {
      $cart .= ','.$_GET['id'];
    } else {
      $cart = $_GET['id'];
    }
    break;
  case 'delete':
    if ($cart) {
      $items = explode(',',$cart);
      $newcart = '';
      foreach ($items as $item) {
        if ($_GET['id'] != $item) {
          if ($newcart != '') {
            $newcart .= ','.$item;
          } else {
            $newcart = $item;
          }
        }
      }
      $cart = $newcart;
    }
    break;
  case 'update':
  if ($cart) {
    $newcart = '';
    foreach ($_POST as $key=>$value) {
      if (stristr($key,'qty')) {
        $id = str_replace('qty','',$key);
        $items = ($newcart != '') ? explode(',',$newcart) : explode(',',$cart);
        $newcart = '';
        foreach ($items as $item) {
          if ($id != $item) {
            if ($newcart != '') {
              $newcart .= ','.$item;
            } else {
              $newcart = $item;
            }
          }
        }
        for ($i=1;$i<=$value;$i++) {
          if ($newcart != '') {
            $newcart .= ','.$id;
          } else {
            $newcart = $id;
          }
        }
      }
    }
  }
  $cart = $newcart;
  break;
}
$_SESSION['cart'] = $cart;


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
          
          <?php

          echo showCart();

          /*$total = 0;
          $output[] = '<form action="cart.php?action=update" method="post" id="cart">';
          $output[] = '<table>';

          foreach ($contents as $id=>$qty) {
            $sql = "SELECT * FROM products WHERE id = '$id'";
            $result = mysql_query( $sql, $connection );

            $row = mysql_fetch_array($result, MYSQL_ASSOC);
            extract($row);

            //var_dump($result);
            //if($result) echo 'There are Items here';
            //else echo 'No Items';
            
             $name = $row['name'];
             $price = $row['price'];

            $output[] = '<tr>';
            $output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
            $output[] = '<td>'.$name.'</td>';
            $output[] = '<td>&#36;'.$price.'</td>';
            $output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
            $output[] = '<td>&#36;'.($price * $qty).'</td>';
            $total += $price * $qty;
            $output[] = '</tr>';
          }
          $output[] = '</table>';
          $output[] = '<p>Grand total: &#36;'.$total.'</p>';
          $output[] = '<div><button type="submit">Update cart</button></div>';
          $output[] = '</form>';
          print_r($output);*/

          ?>



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