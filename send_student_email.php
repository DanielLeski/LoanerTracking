<?php

$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

#include("Mail.php");
#$host = "10.2.50.105";
#$from = "ebuckley@dupage88.org";
#$return = "ebuckley@dupage88.org";
#$replyfrom = "ebuckley@dupage88.org";
#$subject = "Returning a Loaner Device";
#$body = "Hi, you have to return the chromebook/charger to the IT department!";
#$to = "";

# global $smtp;
# global $headers;
# global $access_code;
# global $body;
# global $to;
# global $from;

#$y = date('H:i:s', strtotime("3:05pm"));
#$e = date('H:i:s', strtotime('now'));



#$headers = array ('From' => $from,
 #   'To' => $to,
#    'Subject' => $subject);


#$smtp = Mail::factory('smtp',
  # array ('host' => $host));
$myfile = fopen("test.txt", "w")
  $txt = "Daniel Leskiewicz";
  fwrite($myfile, $txt);
  fclose($myfile);

$sql = "SELECT * FROM loaner_chromebooks WHERE Student_Number=NULL";
$result = mysqli_query($conn, $sql);
$getNumRows = mysqli_num_rows($result);
while($getNumRows = mysqli_fetch_array($result)) {
 echo "done";
 echo $row['ITR'];
 echo $row['Serial'];
}


?>
