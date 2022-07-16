<?php
require("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $brand_id =$_POST['bid'];
    
    delete_brand_ctrl($brand_id);
    header('Location: ../admin/viewbrand.php');
}

?>