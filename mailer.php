<?php

include("Mail.php");
$host = "10.2.50.105";
$from = "bwhite@dupage88.net";
$return = "bwhite@dupag88.net";
$replyfrom = "bwhite@dupage88.org";
$subject = "Access Code";
$body = "Hi, you have to return the chromebook/charger to the IT department!";
$to = "2222222@dupage88.org";
#Creating connection to the 
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

global $access_code;
global $password;
global $role;
 

$headers = array ('From' => $from,
	'To' => $to,
  'Subject' => $subject);


$smtp = Mail::factory('smtp',

    array ('host' => $host));


#
# Functions to send an email reminder to return the device
#
#

 function send_email_access_code($user) {
   global $smtp;
   global $headers;
   global $access_code;
   global $body;
   global $to;
   global $from;
   $GLOBALS['to'] = $user;
   $GLOBALS['body'] = strval(rand(10, 100));
   $mail = $smtp->send($to, $headers, $body);
 }

 function update_password() {
  global $conn;

 }


?>
