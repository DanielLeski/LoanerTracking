<?php

#Variables that are kept for data purposes
$CHECK_OUT_TIME;
$CHECK_IN_TIME;

#Connects to the sql server
$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

#
# These functions are made for checking out either a chromebook or a charger 
# These will keep track of the students ID number and the Barcode of the device that 
# they are grabbing and the time that they checked out the device1
#
#


function loaner_charger($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE loaner_chargers SET Student_Number='$id' WHERE id='$barcode'";
  echo $sql;
  if ($conn->query($sql) === true) {
    //echo "New record is correctly created";
  }
}


function loaner_chromebook($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE loaner_chromebooks SET Student_Number='$id' WHERE ITR='$barcode'";
# $sql = "INSERT INTO loaner_chromebooks (Student_Number, ITR, Check_out) VALUES ('$id', '$barcode', '$CHECK_OUT_TIME')";
  if ($conn->query($sql) === TRUE) {
    //echo "New record is correctly created";
  }
}

function loaner_chromebook_cart1($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart1 SET Student_Number='$id', Check_out='$CHECK_OUT_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}

function loaner_chromebook_cart2($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart2 SET Student_Number='$id', Check_out='$CHECK_OUT_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}

function loaner_chromebook_cart3($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart3 SET Student_Number='$id',  Check_out='$CHECK_OUT_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}

function loaner_chromebook_cart4($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart4 SET Student_Number='$id',  Check_out='$CHECK_OUT_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}


function loaner_cb_log($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "INSERT INTO chromebook_log (Student_Number, ITR) VALUES ('$id', '$barcode')";
  if ($conn->query($sql) === TRUE) {
    //echo "New record is correctly added";
  }
}

#Randomize slots for the computer carts so that the wear and tear is equally distributed
function print_cb_carts_random_c1() {
  global $conn;
  $sql = "SELECT Cart FROM cbcart1 WHERE Check_out IS NULL ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
        <tr>
        <th> CB CART 1: </th>
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

#Randomize slots for the computer carts so that the wear and tear is equally distributed
function print_cb_carts_random_c2() {
  global $conn;
  $sql = "SELECT Cart FROM cbcart2 WHERE Check_out IS NULL ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
    echo "<table border='1'>
        <tr>
        <th> CB Cart 2: </th>
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

#Randomize slots for the computer carts so that the wear and tear is equally distributed
function print_cb_carts_random_c3() {
  global $conn;
  $sql = "SELECT Cart FROM cbcart3 WHERE Check_out IS NULL ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
      <tr>
      <th> CB Cart 3: </th>
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

#Randomize slots for the computer carts so that the wear and tear is equally distributed
function print_cb_carts_random_c4() {
  global $conn;
  $sql = "SELECT Cart FROM cbcart4 WHERE Check_out IS NULL ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  echo "<table border='1'>
      <tr>
      <th> CB Cart 4: </th>
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

#Finding duplicates within the main chromebook_lonaer database
#function find_duplicates_in_table($id) {
#  global $conn;
#  $sql = "SELECT Student_Number, COUNT(Student_Number) FROM loaner_chromebooks GROUP BY Student_Number HAVING COUNT(Student_Number) > 1";
#  if ($conn->query($sql) == TRUE) {
#    echo "found duplicate";
#  }
#}

function set_check_out_back_to_null_cb(){
  global $conn;
  global $CHECK_OUT_TIME;
  $sql = "UPDATE loaner_chromebooks SET Check_out=NULL, Student_Number=NULL WHERE Checked_in IS NOT NULL";
  $conn->query($sql);
}

function add_check_out_time_cb($barcode) {
  global $conn;
  global $CHECK_OUT_TIME;
  $CHECK_OUT_TIME = date("Y-m-d h:i:s");
  $sql = "UPDATE loaner_chromebooks SET Check_out='$CHECK_OUT_TIME' WHERE ITR='$barcode'";
  $conn->query($sql);
}

function add_check_out_time_cb_log($barcode) {
  global $conn;
  global $CHECK_OUT_TIME;
  $CHECK_OUT_TIME = date("Y-m-d h:i:s");
  $sql = "UPDATE chromebook_log SET Check_out='$CHECK_OUT_TIME' WHERE ITR='$barcode'";
  $conn->query($sql);
}

function set_check_out_back_to_null_c(){
  global $conn;
  global $CHECK_OUT_TIME;
  $sql = "UPDATE loaner_chargers SET Check_out=NULL, Student_Number=NULL WHERE Check_in IS NOT NULL";
  $conn->query($sql);
}

function add_check_out_time_c($barcode) {
  global $conn;
  global $CHECK_OUT_TIME;
  $CHECK_OUT_TIME = date("Y-m-d h:i:s");
  $sql = "UPDATE loaner_chargers SET Check_out='$CHECK_OUT_TIME' WHERE id='$barcode'";
  $conn->query($sql);
}


#
# These functions are used for when someone is returning a device or a charger
# This will take their id and barcode and search for those in the mysql table
# Then when clicked submit or enter the check_in column on that entry will update
#
#

# Added the Check in time when found

function return_charger($id, $barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $q = "UPDATE loaner_chargers SET Check_in='$CHECK_IN_TIME' WHERE id='$barcode' AND Student_Number='$id'";
  $conn->query($q);
  //echo "Updated Charger return";
}

function return_chromebook($id, $barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $q = "UPDATE loaner_chromebooks SET Checked_in='$CHECK_IN_TIME' WHERE ITR='$barcode'";
  $conn->query($q);
  //echo "Updated chromebook return";
}

function update_check_in_time_in_cb_log($id, $barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $q = "UPDATE chromebook_log SET Checked_in='$CHECK_IN_TIME' WHERE ITR='$barcode'";
  $conn->query($q);
  //echo "Updated chromebook log";

}

function add_checkin_to_cb1($barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart1 SET Check_in='$CHECK_IN_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}


function add_checkin_to_cb2($barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart2 SET Check_in='$CHECK_IN_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}

function add_checkin_to_cb3($barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart3 SET Check_in='$CHECK_IN_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}

function add_checkin_to_cb4($barcode) {
  global $conn;
  global $CHECK_IN_TIME;
  $CHECK_IN_TIME = date('Y-m-d H:i:s');
  $sql = "UPDATE cbcart4 SET Check_in='$CHECK_IN_TIME'  WHERE ITR='$barcode'";
  $conn->query($sql);
}

function find_duplicates($id) {
  global $conn;
  $sql = "SELECT Student_Number, COUNT(Student_Number) FROM loaner_chromebooks WHERE Student_Number IS NOT NULL AND Student_Number IS NOT '' GROUP BY Student_Number HAVING COUNT(Student_Number) > 1";
  $conn->query($sql);
  echo "<br>";
  echo "FOUND DUPLICATE - STUDENT ALREADY HAS A CHROMEBOOK LOANED";
 }

function find_duplicate_chargers($id) {
  global $conn;
  $sql = "SELECT Student_Number, COUNT(Student_Number) FROM loaner_chromebooks WHERE Student_Number IS NOT NULL AND Student_Number IS NOT '' GROUP BY Student_Number HAVING COUNT(Student_Number) > 1";
  $conn->query($sql);
  echo "<br>";
  echo "FOUND DUPLICATE - STUDENT ALREADY HAS A CHARGER LOANED";
}

?>
