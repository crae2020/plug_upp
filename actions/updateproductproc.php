<?php
include("../controllers/product_controller.php");
require("../functions/function.php");

//retrieving the updated value 
if(isset($_POST['submit'])){
    $pid = $_POST['pid'];
    $pcat = $_POST['category'];
$pbrand = $_POST['brand'];
$ptitle = $_POST['ptitle'];
$pprice = $_POST['pprice'];
$pdescr = $_POST['pdescr'];
// $pimage = $_POST[''];
$pkey = $_POST['pkey'];

$pimage = $_FILES['pimage']["name"];
$tmp = $_FILES['pimage']["tmp_name"];
$folder_path = file_upload("images", "product", $tmp, $pimage);
        echo $folder_path;

    update_all_products_ctrl($pid, $pcat, $pbrand, $ptitle, $pprice, $pdescr, $folder_path, $pkey);
    header('Location: ../admin/viewproduct.php');
}

?>