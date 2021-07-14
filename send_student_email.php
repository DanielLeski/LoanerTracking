<?php

$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

include("Mail.php");
$host = "10.2.50.105";
$from = "ebuckley@dupage88.org";
$return = "ebuckley@dupage88.org";
$replyfrom = "ebuckley@dupage88.org";
$subject = "Returning a Loaner Device";
$body = "Hi, you have to return the chromebook/charger to the IT department!";
$to = "";

 global $smtp;
 global $headers;
 global $access_code;
 global $body;
 global $to;
 global $from;

$y = date('H:i:s', strtotime("3:05pm"));
$e = date('H:i:s', strtotime('now'));



$headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);


$smtp = Mail::factory('smtp',
   array ('host' => $host));
 


if($y === $e) {
 #$sql = "SELECT Student_Number, ITR FROM loaner_chromebooks WHERE Check_out IS NOT NULL AND Checked_in=NULL";
 #result = $conn->query($sql);
 #$user = mysqli_num_rows($result);
 while ($user == 1) {
  #we find a user.
  #create a varaible to use mysqli_fetch_assoc($result);
  #we get their user name and barcode
  #we change the global variables for the $to and the $body (add a extra varaible for the itr number)
  #use the smtp to send the mail to the user and go to the next user
  # check if this will iterate to each user 
 }
}
?>
