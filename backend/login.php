<?php

$session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $db_name);

class Login {
 
 #Checks the access and role of the user logining in so that they are redirected 
 public function check_for_access($user, $pass) {
  global $conn;
  $sql = "SELECT * FROM users WHERE username="$user" AND password="$pass"";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  if($getNumRows == 1) {
   $getRowInfo = mysqli_fetch_assoc($result);
   unset($getRowInfo['password']);
   unset($getRowInfo['username']);
   $_SESSION = $getRowInfo;
   if($_SESSION['role'] == 'admin') {
     header("Location:adminUser.php");
  } elseif ($_SESSION['role'] == 'regular') {
     header("Location:regularUser.php");
  } else {
    header("Location:ss.php");
  }
 
 }



}
?>
