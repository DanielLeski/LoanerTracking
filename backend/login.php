<?php

session_start();

$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

class Login {
 
 #Checks the access and role of the user logining in so that they are redirected 
 function check_for_access($user, $pass) {
  global $conn;
  $user = $conn->real_escape_string($user);
  $pass = $conn->real_escape_string($pass);
  $md5password = md5($pass);
  $sql = "SELECT * FROM users WHERE username='$user' AND password='$md5password'";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  if($getNumRows == 1) {
    $getNumRows = mysqli_fetch_assoc($result);
    unset($getNumRows['password']);
    $_SESSION = $getNumRows;
    if ($_SESSION['role'] == 'admin') {
     header("Location:adminUser.php");
     exit();
    } elseif($_SESSION['role'] == 'regular') {
     header("Location:regularUser.php");
     exit();
     } else {
     header("Location:ss.php");
     }
    }
  }
}
?>
