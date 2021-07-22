<?php

#include any imports that are needed 

$servername = "127.0.0.1";
$username = "root";
$password = "newpk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


class register {
 

#adding a user to the table
public function adding_user($user, $pass, $role, $code) {
 global $conn;
 $code = intval($code);
 $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
 $result = $conn->query($sql);
 $getNumRows = mysqli_num_rows($result);
 $getAccessCode = mysqli_fetch_assoc($result);
 if($code == $getAccessCode['code']) {
  $md5password = md5($pass);
  $sql = "INSERT INTO users (username, password, role) VALUES ('$user', '$md5password', '$role')";
  $data = $conn->query($sql);
  if($data) {
   echo "Your registration is complete";
  }
 }
}
 
public function modify_user($user, $pass, $role, $code) {
  global $conn;
  $code = intval($code);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  $getAccessCode = mysqli_fetch_assoc($result);
  if ($code == $getAccessCode['code']) {
   $md5password_updated = md5($pass);
   $sql = "UPDATE users SET role='$role' WHERE username='$user' AND password='$md5password_updated'";
   $data = $conn->query($sql);
   if($data) {
    echo "Information is updated";
   }
  }

 }  


}
?>
