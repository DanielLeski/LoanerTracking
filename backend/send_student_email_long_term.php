<?php

$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);
#add full path to mail.php
include("/usr/share/php/Mail.php");
$host = "10.2.50.105";
$from = "ebuckley@dupage88.net";
$return = "ebuckley@dupage88.net";
$subject = "Returning a Loaner Device";
$body = "return your device";
$to = "2222222@dupage88.org";

global $smtp;
global $headers;
global $access_code;
global $body;
global $to;
global $from;

$headers = array('From'=>$from,
       'To' => $to,
       'Subject' => $subject);

$smtp = Mail::factory('smtp',
       array('host' => $host));

$sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Check_in!='' AND LongTermRepair='0' AND StudentDeviceInRepair=''";
$result = $conn->query($sql);
while($ar = mysqli_fetch_array($result)) {
 $itr = $ar['ITR'];
 $student_name= $ar['Student_Number'];
 $GLOBALS['to'] = $student_name."@dupage88.org"; 
 $GLOBALS['body'] = "Hi, please return device '$itr' by the end of the day please!";
 $mail = $smtp->send($to, $headers, $body);
}

#$GLOBALS['to'] = "2222222@dupage88.org";
#$GLOBALS['body'] = "Hi, please return device back to room A201"; 
#$mail=$smtp->send($to, $headers, $body); 
?>
