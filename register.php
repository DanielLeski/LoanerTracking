<?php
include_once('/Users/smol/fun/PHP_CB/login.php');
 $servername = "127.0.0.1";
 $username = "root";
 $password = "pk1212";
 $db_name = "newphp";
 $conn = mysqli_connect($servername, $username, $password, $db_name);
 global $message;
 global $password;
 global $role;

 function emailing_access_code($to) {
   $subject = "Access Code";
   $GLOBALS['message'] = rand(10,100);
   echo $GLOBALS['message'];
  if(mail($to, $subject, $message)) {
    echo "Your mail has been sent successfully";
   } else {
    echo "Unable to send. Please try again";
   }
 }
 #fix format
 function adding_user($user, $pass, $role) {
  global $conn;
  $md5password = md5($pass); 
  $sql = "INSERT INTO users (username, password, role) VALUES ('$user', '$md5password', '$role')";
  $data = $conn->query($sql);
  if ($data) {
    echo "Your registration is complete!";
  }
 }
 
 #changing a users permission
 function modify_user($user, $pass, $role) {
  global $conn;
  global $password;
  $GLOBALS['role'] = $role;
  $sql = "UPDATE users SET role='$role' WHERE username='$user' AND password='$pass'";
  echo $mysqli->error;
  $conn->query($sql);
 }

?>
