<?php

session_start();

include_once('/Users/smol/fun/PHP_CB/register.php');
#coonnects to the sql server
$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


function check_for_access($user, $pas) {
  global $conn;
  $sql = "SELECT username FROM users WHERE username='$user' AND password='$pas'";
  $result = $conn->query($sql);
  if($result->num_rows == 1) {
      $_SESSION['username'] = $user;
      header("Location:index.php");
    }
 }
?>
