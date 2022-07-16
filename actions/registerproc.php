<?php
require("../controllers/customer_controller.php");

$name = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$city = $_POST['city'];
$contact = $_POST['contact'];

// encrypting the the password using hash.
$hash = password_hash($password, PASSWORD_DEFAULT);

// check whether function works
$check= add_customer_ctrl($name, $email, $hash, $country, $city, $contact);

if ($check) {
	// echo "Registration Successful";
	header("Location: ../login/login.php");
    exit();
}

else{
	echo "not working";
}

?>