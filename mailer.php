<?php

include("Mail.php");
$host = "10.2.50.105";
$from = "ebuckley@dupage88.net";
$replyto = "ebuckley@dupage88.net";
$subject = "RETURN YOUR DEVICE!";
$body = "Hi, you have to return the chromebook/charger to the IT department!";
$to = "ebuckley@dupage88.net";

#Creating connection to the 
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

global $message;
global $password;
global $role;
 

$headers = array ('From' => $from,

	'To' => $to,
	'Subject' => $subject,
	'Reply-To' =>$replyto);


$smtp = Mail::factory('smtp',

    array ('host' => $host));

function send_email_to_student() {
    global $smtp;
    global $headers;
    global $body; 
    global $to;   
    $smtp->send($to, $headers, $body);
}



 function send_email_access_code($user) {
   global $message;
   global $smtp;
   global $headers;
   global $to;
   global $body;
   $GLOBALS['body'] = rand(10,100); 
   $smtp->send($to, $headers, $body); 
 }

function get_student_information($br, $checkout){
  


}

?>
