<?php
//connect to the user account class
require("../classes/product_class.php");
// include("../functions/function.php");

//sanitize data
// function cleanText($data) 
// {
//   $data = trim($data);
// //   $data = stripslashes($data);
// //   $data = htmlspecialchars($data);
//   return $data;
// }

// --INSERT--
function add_brand_ctrl($bname){

    //creating an instance
    $add_brand = new product_class();
  
    // return method
    return $add_brand -> insert_brand($bname);
  }

  function add_category_ctrl($cname){

    //creating an instance
    $add_category = new product_class();
  
    // return method
    return $add_category -> insert_category($cname);
  }

  function add_product_ctrl($pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey){

    //creating an instance
    $add_product = new product_class();
  
    // return method
    return $add_product -> insert_product($pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey);
  }



/* SELECT */

//selecting one brand
function select_one_brand_ctrl($bid){

    // creating instance
    $select_brand = new product_class();
  
    // return method
    $data = $select_brand -> select_one_brand($bid);
      return $data;
  }
  
  //selecting all brands
  function select_all_brands_ctrl(){
  
    // creating instance
    $select_brand = new product_class();
  
    // return method
    $data = $select_brand -> select_brand();
      return $data;
  }

  function select_one_category_ctrl($cid){

    // creating instance
    $select_category = new product_class();
  
    // return method
    $data = $select_category -> select_one_category($cid);
      return $data;
  }
  
  //selecting all categories
  function select_all_categories_ctrl(){
  
    // creating instance
    $select_category = new product_class();
  
    // return method
    $data = $select_category -> select_category();
      return $data;
  }

  function select_one_product_ctrl($pid){

    // creating instance
    $select_product = new product_class();
  
    // return method
    $data = $select_product -> select_one_product($pid);
      return $data;
  }

  function select_all_products_ctrl(){
  
    // creating instance
    $select_product = new product_class();
  
    // return method
    $data = $select_product -> select_all_products();
      return $data;
  }

  function search_products_ctrl($a){

    $search_product = new product_class();
  
    return $search_product -> search_products($a);
  
  }
  

/* UPDATE */

//update all brands
function update_all_brands_ctrl($bid, $bname){

    //creating instance
    $update_brand = new product_class();
  
    // return method
    $data = $update_brand -> update_brand($bid, $bname);
      return $data;
  }

  //update all categories
function update_all_categories_ctrl($cid, $cname){

    //creating instance
    $update_category = new product_class();
  
    // return method
    $data = $update_category -> update_category($cid, $cname);
      return $data;
  }

  function update_all_products_ctrl($pid, $pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey){

    //creating instance
    $update_product = new product_class();
  
    // return method
    $data = $update_product -> update_product($pid, $pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey);
      return $data;
  }


/* DELETE */

function delete_brand_ctrl($bid){
  $del = new product_class();
    return $del->delete_brand($bid);
}

function delete_category_ctrl($cid){
    $del = new product_class();
      return $del->delete_category($cid);
  }

  function delete_product_ctrl($pid){
    $del = new product_class();
      return $del->delete_product($pid);
  }


?>