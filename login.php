<?php
#starts the session
session_start();

#coonnects to the sql server
$servername = "127.0.0.1";
$username = "dan";
$password = "danl1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


function check_for_access($user, $pas) {
  global $conn;
  $md5password = md5($pas);
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
    } else {
     header("Location:regularUser.php");
     exit();
     }
    }
  }
?>
