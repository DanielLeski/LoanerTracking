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
$password = "danl1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);



$headers = array ('From' => $from,

	'To' => $to,
	'Subject' => $subject,
	'Reply-To' =>$replyto);


$smtp = Mail::factory('smtp',

    array ('host' => $host));

function send_email_to_student($br, $checkout) {
    global $smtp;
    global $headers;
    global $body; 
    global $to;   
    $smtp->send($to, $headers, $body);
}


 global $message;
 global $password;
 global $role;
 
 function emailing_access_code($to) {
   global $message;
   global $smtp;
   global $headers;
   global $body;
   global $to;

   $subject = "Access Code";
   $message  = rand(10,100);
   $GLOBALS['message'] = $message;
   
  
 }

function get_student_information($br, $checkout){
  

}

?>
