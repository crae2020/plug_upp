<?php

include("../controllers/cart_controller.php");
// Retrieves the brand name and passes it into the add brand controller
session_start();

$cid = $_SESSION['customer_id'];
$pid = $_GET['pid'];

$ip_address = $_SERVER["REMOTE_ADDR"];

$check_duplicate = duplicate_all_cart_ctrl($pid, $cid);

// $duplicate_check = duplicate_all_cart_ctrl($pid, $cid);
//print_r($duplicate_check);
//$update_check = update_cart_qty_ctrl($pid, $cid);

if (count($check_duplicate) == 0){
    $cart_check = add_cart_ctrl($pid, $ip_address, $cid); 
    if ($cart_check) {
        echo "Added to cart successfully";
        header('Location: ../view/shop.php');
    }
    else{
        echo "cart insertion failed";
    }
}
else{
    $update_check = update_cart_qty_ctrl($pid, $cid);
    if ($update_check) {
        /* echo "Brand name inserted successfully"; */
        header('Location: ../view/shop.php');
    }
    else{
        echo "cart insertion failed";
    }

}





?>

