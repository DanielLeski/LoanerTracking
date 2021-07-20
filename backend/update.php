<?php

#Creates a session when the page is loaded
session_start();


#Getting a connection to the mysql database
$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);

#Creating a class for mains functions that will be used throughout the program 
class sqlUpdater {

#Grabbing times the device was checked out or not
public $CHECK_OUT_TIME;
public $CHECK_IN_TIME;


#Checking if the student is currently within the powerschool database("csv")
function check_if_student_is_in_powerschool($id) {

}

#Checking that the requested device that is being checked out is a valid and active one 
function check_if_barcode_is_correct($barcode) {

}

#Loaning a charger to a student
function loaner_charger($id, $barcode) {

}
#loans a chromebook to the student
function loaner_chromebook($id, $barcode) {

}

#Storing a log of each device that is checked out
function loaner_cb_log($id, $barcode) {

}

#If a chromebook is broken a field within mysql will be updated that the chromebook is in repair and will not 
#be aviable to be used until updated
function set_chromebook_to_repair($barcode) {

}

function chromebook_out_of_repair($barcode) {

}

# Optional
# Prints out the table 

#Adding a checkout time to the chromebooks when being checked out
function add_checkout_time_cb() {

}

#adds a checkout time to the chargers 
function add_checkout_time_c() {

}


#This sets back the chromebook if the field is check in is populated
function set_check_out_back_to_null() {

}

#sets the chargers checkout field back to null after getting a checkin date
function set_checkout_back_to_null_c() {

}

#This sets back the chromebook that was checked back in back to null so that is ready to be used again
function add_check_out_time_in_log($barcode) {

}

#Finding duplicates within the chromebook table
function find_duplicates($id) {


}


}
?>
