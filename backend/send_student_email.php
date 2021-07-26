<?php

$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

#include("Mail.php");
#$host = "10.2.50.105";
#$from = "ebuckley@dupage88.net";
#$return = "ebuckley@dupage88.net";
#$subject = "Returning a Loaner Device";
#$body = "";
#$to = "";

global $smtp;
global $headers;
global $access_code;
global $body;
global $to;
global $from;

#$headers = array('From'=>$from,
#       'To' => $to,
#       'Subject' => $subject);

#$smtp = Mail::factory('smtp',
#       array('host' => $host));

$sql = "SELECT * FROM CBcartAll WHERE Check_out!='' AND Check_in='' AND LongTermRepair='0'";
$result = $conn->query($sql);
while ($ar = $result->fetch_row()) {
  #$GLOBALS['to'] = $ar[2] ."@dupage88.org";
  #$GLOBALS['body'] = "Hi, please return device '$ar[3]' back to room A201";
  #$mail=$smtp->send($to, $header, $body); 
  print_r($ar[3] . "\n");
}
?>
