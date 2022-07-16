<?php

require("../controllers/product_controller.php");
// Retrieves the brand name and passes it into the add brand controller
$cat_name = $_POST['cat_name'];

$cat_check = add_category_ctrl($cat_name);

if ($cat_check) {
	// echo "Brand name inserted successfully";
	header('Location: ../admin/viewcat.php');
}
else{
	echo "category name insertion failed";
}

?>