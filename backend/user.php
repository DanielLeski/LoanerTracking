<?php

#include the proper includes statements 
$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


class User {

 private $username;
 private $password;
 private $role;
 public $access_to_carts = array();

 public function add_user_into_database($username, $password, $role, $code, $carts) {
  global $conn;
  #create the user and place into the database with the carts
  $code = intval($code);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getAccessCode = mysqli_fetch_assoc($result);
  if($code == $getAccessCode['code']) {
   $md5password = md5($pass);
   $sql = "INSERT INTO users (username, password, role, carts) VALUES ('$user', '$md5password', '$role', '$carts')";
   $data = $conn->query($sql);
   if ($data) {
    echo "Your registration is complete";
   }
 }

public function modify_user_permissions($user, $pass, $role, $code) {
  global $conn;
  $code = intval($code);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getNumRows = mysqli_num_rows($result);
  $getAccessCode = mysqli_fetch_assoc($result);
  if ($code == $getAccessCode['code']) {
   $md5password_updated = md5($pass);
   $sql = "UPDATE users SET role='$role' WHERE username='$user' AND password='$md5password_updated'";
   $data = $conn->query($sql);
   if($data) {
    echo "Information is updated";
   }
  }
 }

 public function modify_cb_carts_for_user($username, $password, $carts, $code) {
  global $conn;
  $code = intval($code);
  $sql = "SELECT * FROM access_code ORDER BY id DESC LIMIT 0,1";
  $result = $conn->query($sql);
  $getAccessCode = mysqli_fetch_assoc($result);
  if($code == $getAccessCode['code']) {
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);
    $getNumRows = mysqli_num_rows($result);
    if($getNumRows == 1) {
     $updateCarts = "UPDATE CDcartAll SET ReferenceToCart='$carts'";
     $conn->query($updateCarts);
    }
  }
 }

 public function parse_cart_information($username) {
  
 }


 public function print_chromebook_cart_1() {
  global $conn;
  $sql = "SELECT Device FROM CBcartAll WHERE Check_out IS NULL AND Repair='0' AND ReferenceToCart=1 ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 1: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Cart'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
  echo "</table>";
 }

public function print_chromebook_cart_2() {
  global $conn;
  $sql = "SELECT Device FROM CBcartAll WHERE Check_out IS NULL AND Repair='0' AND ReferenceToCart=2 ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
    <tr>
    <th> WBCB Cart 2: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Cart'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
  echo "</table>";

}

public function print_chromebook_cart_3() {
  global $conn;
  $sql = "SELECT Device FROM CBcartAll WHERE Check_out IS NULL AND Repair='0' AND ReferenceToCart=3 ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
    <tr>
    <th> WB CB Cart 3: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Cart'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
  echo "</table>";
}

public function print_chromebook_cart_4() {
  global $conn;
  $sql = "SELECT Device FROM cbcart4 WHERE Check_out IS NULL AND Repair='0' AND ReferenceToCart=4 ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
    <tr>
    <th> WB CB Cart 4: </th>
    </tr>";
  $row = 0;
  do {
    $rows = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $rows['Cart'] . "</td>";
    echo "</tr>";
    $row = $row + 1;
  } while ($row <= 10);
}

}
?>
