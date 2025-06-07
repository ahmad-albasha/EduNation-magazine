<?php 

require_once 'con.php';
require_once 'registration.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];




$salt = 'rounds=5000$somesaltstring$'; 
$hashed_name= crypt($name, $salt);
$hashed_email = crypt($email, $salt);
$hashed_password= crypt($pass, $salt);


$final_hashed_name = md5($hashed_name);
$final_hashed_email = md5($hashed_email);
$final_hashed_password = md5($hashed_password);


?>