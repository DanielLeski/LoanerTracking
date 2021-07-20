<?php
include_once('/home/administrator/LoanerTracking/backend/login.php');
include_once('/home/administrator/LoanerTracking/backend/mailer.php');

$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);



function adding_user($user, $pass, $role, $code) {
   global $conn;
   global $message;
   $code = intval($code);
   $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
   $result = $conn->query($sql);
   $getNumRows = mysqli_num_rows($result);
   $getAccessCode = mysqli_fetch_assoc($result);
   if ($code == $getAccessCode['code']) {
     $md5password = md5($pass); 
     $sql = "INSERT INTO users (username, password, role) VALUES ('$user', '$md5password', '$role')";
     $data = $conn->query($sql);
    if ($data) {
      echo "Your registration is complete!";
    }
  }
 }
  
 
 #changing a users permission
 function modify_user($user, $pass, $role, $code) {
  global $conn;
  global $password;
  $code = intval($code);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  $getAccessCode = mysqli_fetch_assoc($result);
  if ($code == $getAccessCode['code']) {
   $m5password_updated = md5($pass);
   $sql = "UPDATE users SET role='$role' WHERE username='$user' AND password='$m5password_updated'";
   $data = $conn->query($sql);
    if ($data) {
     echo "Information is updated";
   }
  }
}

#Granting people certain permissions to certain carts
 function granting_perimission_to_carts_by_group($role) {
  global $conn;
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);
  $getRows = mysqli_num_rows($result);
  $getUser = mysqli_fetch_assoc($result);
  echo $getUser['role']; 
 
 }

?>
