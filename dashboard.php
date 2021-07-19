<?php

$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$userArray = array();
if($result->num_rows > 0 ) {
 while($row = $result->fetch_assoc()) {
  $userArrayItem = array();
  $userArrayItem['username'] = $row['username'];
  $userArrayItem['role'] = $row['role'];
  array_push($userArray, $userArrayItem);
 }
}
$conn->close();
header('Content-Type: application/json');

?>


