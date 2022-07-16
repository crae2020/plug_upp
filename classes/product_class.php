<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*product class to handle all product functions 
*/
/**
 *@author Kekeli Mensah
 *
 */

class product_class extends db_connection
{
	//--INSERT--//

	function insert_brand($bname){

		$sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$bname')";

		return $this -> db_query($sql);
	}

    function insert_category($cname){

		$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$cname')";

		return $this -> db_query($sql);
	}

    function insert_product($pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey){

        $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) 
                VALUES ('$pcat', '$pbrand', '$ptitle', '$pprice', '$pdescr', '$pimage', '$pkey')";
    
        return $this -> db_query($sql);
    }


   

	//--SELECT--//

	 //Select all
     function select_brand(){
		$sql =" SELECT * FROM `brands`";

		return $this -> db_fetch_all($sql);
	}

	//Select one
	function select_one_brand($bid){
		$sql =" SELECT * FROM `brands` WHERE `brand_id` = '$bid'";

		return $this -> db_fetch_one($sql);
	}

    //Select all
    function select_category(){
		$sql =" SELECT * FROM `categories`";

		return $this -> db_fetch_all($sql);
	}

	//Select one
	function select_one_category($cid){
		$sql =" SELECT * FROM `categories` WHERE `cat_id` = '$cid'";

		return $this -> db_fetch_one($sql);
	}

    //Select one
	function select_one_product($pid){
		$sql =" SELECT * FROM `products` WHERE `product_id` = '$pid'";

		return $this -> db_fetch_one($sql);
	}

    //Select all
	function select_all_products(){
		$sql =" SELECT * FROM `products`";

		return $this -> db_fetch_all($sql);
	}

    //search function
    function search_products($a){
		$sql = "SELECT * FROM `products` WHERE `product_title` LIKE '%$a%'";
		return $this ->db_fetch_all($sql);
		//return $sql;
	}


	//--UPDATE--//

    function update_brand($bid, $bname){
        $sql = "UPDATE brands SET brand_name = '$bname' WHERE brand_id = $bid";
    
        return $this -> db_query($sql);
        }

    function update_category($cid, $cname){
        $sql = "UPDATE categories SET cat_name = '$cname' WHERE cat_id = $cid";
        
        return $this -> db_query($sql);
     }

     function update_product($pid, $pcat, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkey){
		$sql = "UPDATE products SET product_cat = '$pcat', product_brand = '$pbrand', product_title = '$ptitle', product_price = '$pprice', product_desc = '$pdesc', product_image = '$pimage', product_keywords = '$pkey' 
		WHERE product_id = $pid";
	
		return $this -> db_query($sql);
		}


	//--DELETE--//
    function delete_brand($bid){
        $sql= "DELETE FROM `brands` WHERE `brand_id` = '$bid'";

		return $this->db_query($sql);
	} 

    function delete_category($cid){
        $sql= "DELETE FROM `categories` WHERE `cat_id` = '$cid'";

		return $this->db_query($sql);
	} 

    function delete_product($pid){
        //Sql query to delete brand
        $sql= "DELETE FROM `products` WHERE `product_id` = '$pid'";
    
        return $this->db_query($sql);
    }

}

?>