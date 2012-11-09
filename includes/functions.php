<?php

function writeShoppingCart() {
$cart = $_SESSION['cart'];
if (!$cart) {
      $numItems= 0;
return $numItems;
} else {
      // Parse the cart session variable
      $items = explode(',',$cart);
      $numItems = count($items);
      return $numItems;
}
}

function showCart() {
                  include("mysql_connect.php");
            $cart = $_SESSION['cart'];
            
            if ($cart) {
            $items = explode(',',$cart);
            $contents = array();
            foreach ($items as $item) {
            $contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
            }

            $output[] = '<form action="cart.php?action=update" method="post" id="cart">';
            $output[] = '<table>';
            foreach ($contents as $id=>$qty) {
            /*$sql = 'SELECT * FROM books WHERE id = '.$id;
            $result = $db->query($sql);
            $row = $result->fetch();
            extract($row);*/


            $sql = "SELECT * FROM products WHERE id = '$id'";
            $result = mysql_query( $sql, $connection );
            if(! $result ){
                      die('Could not get data: ' . mysql_error());
                    }
            $row = mysql_fetch_array($result, MYSQL_ASSOC);
            extract($row);

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
            } else {
            $output[] = '<p>You shopping cart is empty.</p>';
            }
            return join('',$output);
            }

?>