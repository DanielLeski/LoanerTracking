<?php

#include the proper includes statements 
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


class User {

 function add_user_into_database($username, $password, $role, $code) {
  global $conn;
  $code = intval($code);
  $usename = $conn->real_escape_string($username);
  $password = $conn->real_escape_string($password);
  $role = $conn->real_escape_string($role);
  $code = $conn->real_escape_string($code);
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  $getAccessCode = mysqli_fetch_assoc($result);
  if ($code == $getAccessCode['code']) {
   if($uppercase || $lowercase || $number || $specialChars || strlen($password) >= 8) {
    $md5password = md5($password); 
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$md5password', '$role')";
    $data = $conn->query($sql);
    if ($data) {
     echo "Your registration is complete!";
    }
   }
 }
}

 function add_carts_to_user($user, $cart) {
  global $conn;
  $sql = "UPDATE users SET carts='$cart' WHERE username='$user'";
  $conn->query($sql);
 }

 function modify_user_permissions($user, $pass, $role, $code) {
  global $conn;
  $code = intval($code);
  $user = $conn->real_escape_string($user);
  $pass = $conn->real_escape_string($pass);
  $role = $conn->real_escape_string($role);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  $getAccessCode = mysqli_fetch_assoc($result);
  if ($code == $getAccessCode['code']) {
   $md5password_updated = md5($pass);
   $sql = "UPDATE users SET role='$role' WHERE username='$user' AND password='$md5password_updated'";
   $data = $conn->query($sql);
   if($data) {
    echo "Permissions are updated";
   }
  }
 }

 function modify_cb_carts_for_user($username, $password, $carts, $code) {
  global $conn;
  $code = intval($code);
  $username = $conn->real_escape_string($username);
  $password = $conn->real_escape_string($password);
  $carts = $conn->real_escape_string($carts);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getAccessCode = mysqli_fetch_assoc($result);
  if($code == $getAccessCode['code']) {
    $md5password_updated = md5($password);
    $sql = "UPDATE users SET carts='$carts' WHERE username='$username' AND password='$md5password_updated'";
    if($conn->query($sql)) {
     echo "Carts for the user has been updated!";
    } else {
     echo "Carts for the user have not been updated";
    }
  } 
 }

function parse_array($username) {
 global $conn;
 $sql = "SELECT * FROM users WHERE username='$username'";
 $result = $conn->query($sql);
 $getUserCarts = mysqli_fetch_assoc($result);
 $array = explode(",", $getUserCarts['carts']);
   if(in_array("WBCB1", $array)) {
    self::print_chromebook_cart_1();
   }
   if(in_array("WBCB2", $array)) {
    self::print_chromebook_cart_2();
   }
   if(in_array("WBCB3", $array)) {
    self::print_chromebook_cart_3();
   }
   if(in_array("WBCB4", $array)) {
    self::print_chromebook_cart_4();
   }
   if(in_array("WBCB5", $array)) {
    self::print_chromebook_cart_5();
   }
   if(in_array("WBCB6", $array)) {
    self::print_chromebook_cart_6();
   }
   if(in_array("WBCB7", $array)) {
    self::print_chromebook_cart_7();
   }
   if(in_array("WBP1", $array)) {
    self::print_power_1();
   }
   if(in_array("n/a", $array)) {
    echo "NO Chromebook Carts To Show";
   }
}

function print_chromebook_cart_1() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='1' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 1: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
  echo "</table>";
  echo "</div>";
 }

 function print_chromebook_cart_2() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND  ReferenceToCart='2' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 2: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
  echo "</table>";
  echo "</div>";

}

 function print_chromebook_cart_3() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='3' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 3: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
  echo "</div>";
  echo "</table>";
  
}

 function print_chromebook_cart_4() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='4' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 4: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
   echo "</div>";
   echo "</table>";
    
}

 function print_chromebook_cart_5() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='5' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 5: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
   echo "</div>";
   echo "</table>";
    
}

 function print_chromebook_cart_6() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='6' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 6: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
   echo "</div>";
   echo "</table>";
    
 }

 function print_chromebook_cart_7() {
  global $conn;
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='7' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 7: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Device'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
   echo "</div>";
   echo "</table>";
    
 }
 



 function print_power_1() {
  global $conn; 
  $sql = "SELECT * FROM CBcartAll WHERE Check_out='' AND Availability='0' AND LongTermRepair='0' AND ReferenceToCart='P1' ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<div>";
  echo "<table border='1'>
  <tr>
  <th> WBP Cart 1 </th>
  </tr>";
  $row = 0;
  do {
   $rows = mysqli_fetch_array($result);
   echo "<tr>";
   echo "<td>" . $rows['Device'] . "</td>";
   echo "</tr>";
   $row = $row + 1;
  } while ($row <= 10);
    echo "</div>";
    echo "</table>";
 }
}
?>
