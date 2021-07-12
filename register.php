<?php
include_once('/home/administrator/LoanerTracking/login.php');

$servername = "127.0.0.1";
$username = "dan";
$password = "danL1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

 
 
 function adding_user($user, $pass, $role, $code) {
   global $conn;
   global $message;
   if ($code === $GLOBALS['message']) {
     $md5password = md5($pass); 
     $sql = "INSERT INTO users (username, password, role) VALUES ('$user', '$md5password', '$role')";
     $data = $conn->query($sql);
    if ($data) {
      echo "Your registration is complete!";
    }
  }
 }
  
 
 #changing a users permission
 function modify_user($user, $pass, $role) {
  global $conn;
  global $password; 
  if ($code === $GLOBALS['message']) {
   $m5password_updated = md5($pass);
   $sql = "UPDATE users SET role='$role' WHERE username='$user' AND password='$m5password_updated'";
   $data = $conn->query($sql);
    if ($data) {
     echo "Information is updated";
   }
  }
}
 ?>
