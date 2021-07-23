<?php

#require_once("Mail.php");

$host = "10.2.50.105";
$from = "ebuckley@dupage88.net";
$replyFrom = "ebuckley@dupage88.net";
$subject = "Access Code";
$body = "";
$to = "";

#$headers = array ('From' => $from,
#        'To' => $to,
#        'Subject' => $subject);

# $smtp = Mail::factory('smtp', 
 #         array ('host' => $host));        




$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

class mailer {
 
  function send_email_access_code($user) {
   global $conn;
   global $smtp;
   global $to;
   $GLOBALS['to'] = $user;
   $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0, 1";
   $result = $conn->query($sql);
   $getNumRows = mysqli_num_rows($result);
   $getAccessCode = mysqli_fetch_assoc($result);
   $GLOBALS['body'] = $getAccessCode['code'];
   #$mail = $stmp->send($to, $header, $body);
 }
}


?>
