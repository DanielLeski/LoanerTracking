<?php

session_start();
#coonnects to the sql server
$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);



function check_for_access($username, $password) {
  global $conn;
  $sql = "SELECT username and password FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);
  if($result->num_rows == 0) {
    echo "user is not found -- in better terms .. no access for you";
  } else{
    header("Location:index.php");
  }
 }

