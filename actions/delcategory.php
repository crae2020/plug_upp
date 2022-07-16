<?php
require("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $cat_id =$_POST['cid'];
    
    delete_category_ctrl($cat_id);
    header('Location: ../admin/viewcat.php');
}

?>