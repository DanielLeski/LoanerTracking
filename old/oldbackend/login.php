<?php
#starts the session
session_start();

#coonnects to the sql server
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


function check_for_access($user, $pas) {
  ?>
