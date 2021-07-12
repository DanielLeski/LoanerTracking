<?php


#Connects to the sql server

$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

function reset_password($user, $pas) {
 global $conn;
 $sql = "UPDATE users SET password=$pas WHERE username='$user'";
 $conn->query($sql);
}
?>
