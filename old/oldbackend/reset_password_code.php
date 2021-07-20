<?php

include_once("/home/administrator/LoanerTracking/mailer.php");

$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

function reset_password($user, $pas, $code) { 
   global $conn;
   $code = intval($code);
   $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
   $result = $conn->query($sql);
   $getNumRows = mysqli_num_rows($result);
   $getAccessCode = mysqli_fetch_assoc($result);
   if($code === $getAccessCode['code']) {
      $md5password = md5($pas);
      $sql = "UPDATE users SET password='$md5password'  WHERE username='$user'";
      $conn->query($sql);
   }
}
?>

