<?php
//connect to the user account class
require("../classes/customer_class.php");
include("../functions/function.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
  return $data;
}

// --INSERT--
function add_customer_ctrl($name, $email, $pass, $country, $city, $contact){
// creating an instance
  $add = new customer_class();
// return method
  return $add -> insert_customer($name, $email, $pass, $country, $city, $contact);
}



/* SELECT */
function login_customer_ctrl($email, $pass){

    // creating instance
    $login_customer = new customer_class();
  
    // return method
    $data = $login_customer -> login_customer($email);
    if (verify_pass($data['customer_pass'], $pass) == true) {
      return $data;
    }
    return null;
  }

  function user_email_ctrl($cid){

    // creating instance
    $user_email = new customer_class();
  
    // return method
    $data = $user_email -> user_email($cid);
      return $data;
  }

  function get_total_revenue_ctrl(){
    $data = new customer_class();
    
    return $data->get_total_revenue();
  }
  function  get_all_products_ctrl(){
    $data = new customer_class();
    
    return $data-> get_all_products();
    
    }

    function  get_all_brands_ctrl(){
      $data = new customer_class();
      
      return $data-> get_all_brands();
      
      }

      function  get_all_categories_ctrl(){
        $data = new customer_class();
        
        return $data-> get_all_categories();
        
        }

        function  get_all_users_ctrl(){
          $data = new customer_class();
          
          return $data-> get_all_users();
          
          }
    
  
/* UPDATE */



/* DELETE */


?>