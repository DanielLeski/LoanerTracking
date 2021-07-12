<?php

include("/home/administrator/LoanerTracking/register.php");

$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

function reset_password($user, $pas, $code) { 
   global $conn;
   $code = intval($code);
   if($code === $GLOBALS['message']) {
      $sql = "UPDATE users SET password='$pas' WHERE username='$user'";
      $conn->query($sql);
   }
}
?>

