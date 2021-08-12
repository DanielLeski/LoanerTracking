<?php

include("Mail.php");

$host = "10.2.50.105";
$from = "ebuckley@dupage88.net";
$return = "bwhite@dupage88.net";
$replyFrom = "bwhite@dupage88.net";
$subject = "Access Code";
$body = "replace with code";
$to = "2222222@dupage88.org";
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject, 'Reply-From' => $replyFrom);
$smtp = Mail::factory('smtp', array ('host' => $host));


function send_email_access_code($user) {
 global $conn;
 global $smtp;
 global $to;
 global $headers;
 global $body;
 $user = $conn->real_escape_string($user);
 $GLOBALS['to'] = $user;
 $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0, 1";
 $result = $conn->query($sql);
 $getNumRows = mysqli_num_rows($result);
 $getAccessCode = mysqli_fetch_assoc($result);
 $GLOBALS['body'] = $getAccessCode['code'];
 $mail = $smtp->send($to, $headers, $body);
 if(PEAR::isError($mail)) {
  echo $mail->getMessage();
 } else {
 echo "Access Code is sent to the email!";
 }
}
?>
