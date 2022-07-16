<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Customer class to handle all customer functions 
*/
/**
 *@author Kekeli Mensah
 *
 */

class customer_class extends db_connection
{
	//--INSERT--//
	function insert_customer($name, $email, $pass, $country, $city, $contact)
	{
		$sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) 
        VALUES ('$name','$email','$pass','$country','$city', '$contact','2')";

		return $this->db_query($sql);
	}

	//--SELECT--//
	function login_customer($email){

		$sql =" SELECT * FROM `customer` WHERE `customer_email` = '$email'";

		return $this -> db_fetch_one($sql);
	}

	function user_email($cid){
		$sql = "SELECT customer_email FROM customer WHERE customer_id = '$cid'";

		return $this -> db_fetch_one($sql);
	}

	function get_total_revenue(){

		$sql ="SELECT SUM(amt) FROM `payment`";
	
		return $this->db_fetch_all($sql);
	}

	function get_all_products(){

		$sql ="SELECT COUNT(product_id) FROM `products`";
	
		return $this->db_fetch_all($sql);
	}

	function get_all_brands(){

		$sql ="SELECT COUNT(brand_id) FROM `brands`;";
	
		return $this->db_fetch_all($sql);
	}

	function get_all_categories(){

		$sql ="SELECT COUNT(cat_id) FROM `categories`;";
	
		return $this->db_fetch_all($sql);
	}

	function get_all_users(){

		$sql ="SELECT COUNT(customer_id) FROM `customer`;";
	
		return $this->db_fetch_all($sql);
	}



	//--UPDATE--//



	//--DELETE--//
	

}

?>