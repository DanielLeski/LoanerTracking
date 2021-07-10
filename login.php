<?php
session_start();

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
  if($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    echo $row['role'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['username'] = $row['username'];
    echo $row['role'];
    if($row['role'] === 'admin') {
      header("Location:index.php");
      die();
    } else {
      echo $row['role'];
      header("Location:regularUser.php");
    }
  }
 }
?>
