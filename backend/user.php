<?php

#include the proper includes statements 
$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


class User {

 private $username;
 private $password;
 private $role;
 private $access_to_carts = array();

 public function __construct($username, $password, $role, $access_to_carts) {
  $this->$username = $username;
  $this->$password = $password;
  $this-$role = $role;
  $this->$access_to_carts = $access_to_carts;
 }
 
 function add_user_into_database($username, $password, $role, $access_to_carts) {
  global $conn;
  #create the user and place into the database with the carts 
 }

 function modify_cb_carts_for_user($username) {

 }

}
?>
