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

function check_if_active_statff($email) {
 global $conn;
 $sql = "SELECT * FROM Staff WHERE Email='$email'";
 $result = mysqli_query($conn, $sql);
 echo mysqli_error($conn);
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
  return false;
 }
}

#Checking that the requested device that is being checked out is a valid and active one 
function check_if_barcode_is_correct($barcode) {
 global $conn;
 $sql = "SELECT * FROM loaner_chromebooks, cbcart1, cbcart2, cbcart3, cbcart4, loaner_chargers WHERE ITR='$barcode'";
 $result = $conn->query($sql);
 $getNumRows = mysqli_num_rows($result);
 if($getNumRows == 1) {
  echo "Device/Charger is updated";
  return true;
 } else {
  echo "Please check the barcode";
  return false;
 }
}

function chromebook_long_term_repair($barcode) {
 global $conn;
 $sql = "UPDATE CBcartAll SET LongTermRepair='1' WHERE ITR='$barcode'";
 $conn->query($sql);
}

#Loaning a charger to a student
function loaner_charger($id, $barcode) {
 global $CHECK_OUT_TIME;
 global $conn;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE loaner_chargers SET Student_Number='$id' WHERE id='$barcode'";
 $conn->query($sql);

}
#loans a chromebook to the student
function loaner_chromebook($id, $barcode) {
 global $CHECK_OUT_TIME;
 global $conn;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartALL SET Student_Number='$id' WHERE ITR='$barcode'";
 $conn->query($sql);

}

#Storing a log of each device that is checked out
function loaner_cb_log($id, $barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "INSERT INTO chromebook_log (Student_Number, ITR) VALUES ('$id', '$barcode')";
 $conn->query($sql);

}

#Sets the chromebook to charge
function charger_to_repair($barcode) {
  global $conn;
  $sql = "UPDATE loaner_chargers SET Repair='1' WHERE ITR='$barcode'";
  $conn->query($sql);
}

function charger_out_to_repair($barcode) {
  global $conn;
  $sql = "UPDATE loaner_chargers SET Repair='0' WHERE ITR='$barcode'";
  $conn->query($sql);
  
}

#If a chromebook is broken a field within mysql will be updated that the chromebook is in repair and will not 
#be aviable to be used until updated
function set_chromebook_to_repair($barcode) {
 global $conn;
 $sql = "UPDATE CBcartAll SET repair='1' WHERE ITR='$barcode'";
 $conn->query($sql);

}

function chromebook_out_of_repair($barcode) {
 global $conn;
 $sql = "UPDATE CBcartAll SET Repair='0' WHERE ITR='$barcode'";
 $conn->query($sql);

}

# Optional
# Prints out the table 

#Adding a checkout time to the chromebooks when being checked oadd_checkin_to_chromebooksut
function add_checkout_time_cb($barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET Check_out='$CHECK_OUT_TIME' WHERE ITR='$barcode'";
 $conn->query($sql);

}

#adds a checkout time to the chargers 
function add_checkout_time_c($barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $sql = "UPDATE loaner_chargers SET Check_out='$CHECK_OUT_TIME' WHERE id='$barcode'";
 $conn->query($sql);


}


#This sets back the chromebook if the field is check in is populated
function set_check_out_back_to_null() {
 global $conn;
 global $CHECK_OUT_TIME;
 $sql = "UPDATE CBcartAll SET Check_out=NULL, Student_Number=NULL WHERE Checked_in IS NOT NULL";
 $conn->query($sql);

}

#sets the chargers checkout field back to null after getting a checkin date
function set_checkout_back_to_null_c() {
 global $conn;
 global $CHECK_OUT_TIME;
 $sql = "UPDATE loaner_chargers SET Check_out=NULL, Student_Number=NULL, WHERE Check_in IS NOT NULL'";
 $conn->query($sql);

}

#This sets back the chromebook that was checked back in back to null so that is ready to be used again
function add_check_out_time_in_log($barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $sql = "UPDATE chromebook_log SET Check_out='$CHECK_OUT_TIME' WHERE ITR='$barcode'";
 $conn->query($sql);

}


#Function to return te charger 
function return_charger($id, $barcode) {
 global $conn;
 global $CHECK_OUT_TIME;
 $CHECK_OUT_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE loaner_chargers SET Cadd_checkin_to_chromebooksheck_in='$CHECK_IN_TIME' WHERE id='$barcode' AND Student_Number='$id'";
 $conn->query($sql);

}

function return_chromebook($barcode) {
 global $conn;
 global $CHECK_IN_TIME;
 $CHECK_IN_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET Check_in='$CHECK_IN_TIME' WHERE ITR='$barcode'";
 $conn->query($sql);

}

function add_checkin_to_chromebooks($barcode) {
 global $conn;
 global $CHECK_IN_TIME;
 $CHECK_IN_TIME = date('Y-m-d H:i:s');
 $sql = "UPDATE CBcartAll SET Check_in='$CHECK_IN_TIME' WHERE ITR='$barcode'";
 $conn->query($sql);

}

#Finding duplicates within the chromebook table
public function find_duplicates_in_cb($id) {
 global $conn;
 $sql = "SELECT Student_Number, COUNT(Student_Number) FROM CBcartAll WHERE Student_Number IS NOT NULL AND Student_Number='$id' GROUP BY Student_Number HAVING COUNT(Student_Number) >=1";
 while($ar = mysqli_fetch_array(mysqli_query($conn, $sql))) {
  echo "Duplicate Student ID is found more than once";
  return true;
 }
  return false;
 }

public function find_duplicates_in_c($id) {
 global $conn;
 $sql = "SELECT Student_Number, COUNT(Student_Number) FROM loaner_chargers WHERE Student_Number IS NOT NULL AND Student_Number='$id' GROUP BY Student_Number HAVING COUNT(Student_Number) >= 1";
 while($ar = mysqli_fetch_array(mysqli_query($conn, $sql))) {
 return true;
 } 
 return false;
 }
}
?>
