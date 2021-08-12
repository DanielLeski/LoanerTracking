<?php
#Creates a session when the page is loaded
session_start();

#Getting a connection to the mysql database
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

#Creating a class for mains functions that will be used throughout the program 
class sqlUpdater {

#Grabbing times the device was checked out or not
public $CHECK_OUT_TIME;
public $CHECK_IN_TIME;

function check_if_active_staff($email) {
 global $conn;
 $sql = "SELECT * FROM staff WHERE Email='$email'";
 $result = mysqli_query($conn, $sql);
 $getNumRows = mysqli_num_rows($result);
 if($getNumRows == 1) {
  return true;
 } else {
  return false;
 }
}

#Checking if the student is currently within the powerschool database("csv")
function check_if_active_student($id) {
 global $conn;
 $sql = "SELECT * FROM ps WHERE Student_Number='$id'";
 $result = $conn->query($sql);
 $getNumRows = mysqli_num_rows($result);
 if($getNumRows == 1) {
  return true;
 } else {
  echo "The ID '$id' is not currently an active student";
  return false;
 }
}

#Checking that the requested device that is being checked out is a valid and active one 
function check_if_barcode_is_correct($barcode) {
 global $conn;
 $sql = "SELECT * FROM CBcartAll WHERE ITR='$barcode'";
 $result = $conn->query($sql);
 $getNumRows = mysqli_num_rows($result);
 if($getNumRows == 1) {
  return true;
 } else {
  echo "Please check the barcode, doesn't match anything in the database.";
  return false;
 }
}
 function chromebook_in_long_term_repair($id, $barcode, $studentDevice){
 global $conn;
 global $CHECK_OUT_TIME;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $id = $conn->real_escape_string($id);
 $barcode = $conn->real_escape_string($barcode);
 $studentDevice = $conn->real_escape_string($studentDevice);
 $sql = "UPDATE CBcartAll SET Student_Number='$id', LongTermRepair='1', StudentDeviceInRepair='$studentDevice', Check_out='$CHECK_OUT_TIME' WHERE ITR='$barcode'";
 if($conn->query($sql)) {
  echo "Chromebook Device '$barcode' Is Out For Long Term, Student Device '$studentDevice' Added To Long Term Repair";
 } else {
  echo "You either fat fingered the barcode of the loaner device or the student's device, or worse .. both";
 }
}

function chromebook_out_of_long_term_repair($barcode) {
 global $conn;
 global $CHECK_IN_TIME;
 $CHECK_IN_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET LongTermRepair='0', StudentDeviceInRepair='', Check_in='$CHECK_IN_TIME', Check_out='', Student_Number='' WHERE StudentDeviceInRepair='$barcode'";  
 if($conn->query($sql)) {
  echo "Chromebook '$barcode' is returned to the cart from long term "; 
 } else {
  echo "Why you got to fat finger the barcode or the student id  Earl";
 }
}

#loans a chromebook to the student
function loaner_chromebook($id, $barcode) {
 global $CHECK_OUT_TIME;
 global $conn;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $id = $conn->real_escape_string($id);
 $barcode = $conn->real_escape_string($barcode);
 $sql = "UPDATE CBcartAll SET Student_Number='$id', Check_in='' WHERE ITR='$barcode'";
 if($conn->query($sql)) {
  echo "Loaned Chromebook '$barcode' to '$id' Successfully";
 } else {
  echo "Barcode is either wrong or Id or worse .. both =(";
 }
}

#Storing a log of each device that is checked out
function loaner_cb_log($id, $barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $id = $conn->real_escape_string($id);
 $barcode = $conn->real_escape_string($barcode);
 $sql = "INSERT INTO chromebook_log (Student_Number, ITR) VALUES ('$id', '$barcode')";
 $conn->query($sql);
}

#If a chromebook is broken a field within mysql will be updated that the chromebook is in repair and will not 
#be aviable to be used until updated
function set_chromebook_to_repair($barcode) {
 global $conn;
 $barcode = $conn->real_escape_string($barcode);
 $sql = "UPDATE CBcartAll SET Availability='1', Student_Number='', Check_in='', Check_out='' WHERE ITR='$barcode'";
 if($conn->query($sql)) {
  echo "Chromebook/Charger '$barcode' Is Placed Into Repair";
 }

}

function chromebook_out_of_repair($barcode) {
 global $conn;
 $barcode = $conn->real_escape_string($barcode);
 $sql = "UPDATE CBcartAll SET Availability='0' WHERE ITR='$barcode'";
 if($conn->query($sql)) {
  echo "Chromebook/Charger '$barcode' Is Taken Out Of Repair";
 }
}

#Adding a checkout time to the chromebooks when being checked oadd_checkin_to_chromebooksut
function add_checkout_time_cb($barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $barcode = $conn->real_escape_string($barcode);
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET Check_out='$CHECK_OUT_TIME', Check_in='' WHERE ITR='$barcode'";
 $conn->query($sql);

}

#This sets back the chromebook if the field is check in is populated
function set_check_out_back_to_null() {
 global $conn;
 global $CHECK_OUT_TIME;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET Check_out='', Student_Number='' WHERE Check_in!=''";
 $conn->query($sql);

}

#This sets back the chromebook that was checked back in back to null so that is ready to be used again
function add_check_out_time_in_log($barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $barcode = $conn->real_escape_string($barcode);
 $sql = "UPDATE chromebook_log SET Check_out='$CHECK_OUT_TIME' WHERE ITR='$barcode'";
 $conn->query($sql);

}

function return_chromebook($barcode) {
 global $conn;
 global $CHECK_IN_TIME;
 $barcode = $conn->real_escape_string($barcode);
 $CHECK_IN_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET Check_in='$CHECK_IN_TIME' WHERE ITR='$barcode'";
 if($conn->query($sql)) {
  echo "Device '$barcode' Is Checked In";
 }
}

function add_checkin_to_device($barcode) {
 global $conn;
 global $CHECK_IN_TIME;
 $CHECK_IN_TIME = date('Y-m-d H:i:s');
 $barcode = $conn->real_escape_string($barcode);
 $sql = "UPDATE CBcartAll SET Check_in='$CHECK_IN_TIME' WHERE ITR='$barcode'";
 $conn->query($sql);
}

#Finding duplicates within the chromebook table
public function find_duplicates_in_cb($id) {
 global $conn;
 $sql = "SELECT Student_Number, COUNT(Student_Number) FROM CBcartAll WHERE Student_Number IS NOT NULL AND Student_Number='$id' GROUP BY Student_Number HAVING COUNT(Student_Number) >2";
 while($ar = mysqli_fetch_array(mysqli_query($conn, $sql))) {
  return true;
 }
  return false;
 }
}
?>
