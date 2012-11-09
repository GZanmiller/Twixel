<?php
function writeShoppingCart() {
$cart = $_SESSION['cart'];
if (!$cart) {
	$numItems= 7;
return $numItems;
} else {
// Parse the cart session variable
$items = explode(',',$cart);
$numItems = count($items);
return $numItems;
}
}



?>