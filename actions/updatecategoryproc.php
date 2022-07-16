<?php
include("../controllers/product_controller.php");

//retrieving the updated value 
if(isset($_POST['submit'])){
    $cat_id =$_POST['cat_id'];
    $cat_name =$_POST['update_category'];
    // echo($cat_name);

    update_all_categories_ctrl($cat_id, $cat_name);
    header('Location: ../admin/viewcat.php');
}

?>