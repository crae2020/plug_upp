<?php
require("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $product_id =$_POST['pid'];
    
    delete_product_ctrl($product_id);
    header('Location: ../admin/viewproduct.php');
}

?>