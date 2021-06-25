<?php
#$ids = array();
#$student_number = array();
#$first_name = array();
#$last_name = array();
#$ITR = array();
#$Serial = array();
#$mac = array();
#$PART_NUMBER = array();
#$GROUP = array();
#$CHECK_OUT = array();
#$STATUS = array();
#$CHECK_IN = array();
#$device_barcode = 0;
#$charger_barcode = 0;
#$chargers = array();
#$CB_AV = array(1,1,1,1,1);


#reading the file and getting the information to each array
$file = fopen('Table.Loaner.csv', 'r');
#$append_file = fopen('Table.Loaner.csv', 'a');
#while (($row = fgetcsv($file, 0, ',')) != FALSE) {
 # array_push($ids, $row[0]);
 # array_push($student_number, $row[1]);
 # array_push($first_name, $row[2]);
 # array_push($last_name, $row[3]);
 # array_push($ITR, $row[4]);
 # array_push($Serial, $row[5]);
 # array_push($mac, $row[6]);
 # array_push($PART_NUMBER, $row[7]);
 # array_push($GROUP, $row[8]);
 # array_push($CHECK_OUT, $row[9]);
 # array_push($STATUS, $row[10]);
 # array_push($CHECK_IN, $row[11]);
# }

#Variables that are kept for data purposes
$CHECK_OUT_TIME;
$CHECK_IN_TIME;


#Connects to the sql server
$servername = "localhost";
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
  $sql = "INSERT INTO cbdata (Student_Number, ITR, Check_out) VALUES ('$id', '$barcode', '$CHECK_OUT_TIME')";
  if ($conn->query($sql) === true) {
    echo "The record is created";
  } else {
    echo "error: ". $sql . "<br>" . $conn->error;
  }
}


function loaner_chromebook($id, $barcode) {
  global $CHECK_OUT_TIME;
  global $conn;
  $CHECK_OUT_TIME = date('Y-m-d H:i:s');
  $sql = "INSERT INTO cbdata (Student_Number, ITR, Check_out) VALUES ('$id', '$barcode', '$CHECK_OUT_TIME')";
  if ($conn->query($sql) === true) {
    echo "new record created";
  } else {
    echo "error: ". $sql . "<br>" . $conn->error;
  }
}

#prints the chromebooks that are ready for loan
function print_av_cb() {
  global $conn;
  $cb_av_table = "SELECT * FROM repalce";
  $rs = mysqli_query($conn, $cb_av_table);
}

#print the chargers that are ready for loan
function print_av_chargers() {

}


#
# These functions are used for when someone is returning a device or a charger
# This will take their id and barcode and search for those in the mysql table
# Then when clicked submit or enter the check_in column on that entry will update
#
#





#Spits out the data from the row AutoID but that can be any row an etc.
#$z = "SELECT * FROM cbdata";
#echo "<b> <center>Database Output</center> </b> <br> <br>";

#if ($result = $conn->query($z)) {

#  while ($row = $result->fetch_assoc()) {
#    $field1name = $row["AutoID"];
#    echo '<b>'.$field1name . '<br />';
#  }
  /*freeresultset*/
#  $result->free();
#}



#$loan = readline("Do you want to loan a (Pick a number)\n1.Charger\n2.Chromebook\n3.Both\n");
#$loan = (int)$loan;

#Current autoID number
#$last_AutoID = (int)end($ids);
#$today = date("d/m/Y");

 # function loaner_chromebook($id, $barcode) {
  #  $last_AutoID = $last_AutoID + 1;
  #  array_push($ids, $last_AutoID);
  #  array_push($student_number, $id);
  #  array_push($CHECK_OUT,$today);
#  }

#  function loaner_charger($id, $bardcode) {
 #   global $last_AutoID;
 #   global $student_number;
 #   $last_AutoID = $last_AutoID + 1;
 #   array_push($student_number, $id);
 #   array_push($ITR, $barcode);
 #   array_push($ids, $last_AutoID);
 #   array_push($CHECK_OUT,$today); 
  #}

 # function loaner_both($id, $device_barcode, $charger_barcode) {
 #   array_push($student_number, $id);
 #   $last_AutoID = $last_AutoID + 1;
 #   array_push($ids, $last_AutoID);
 #   $last_AutoID = $last_AutoID + 1;
 #   array_push($ids, $last_AutoID);
 #   array_push($CHECK_OUT,$today);
 # }

#  function add_av_cb($barcode) {
 #   array_push($CB_AV, $barcode);
 # }
 
 # function add_av_c($barcode) {
 #   array_push($barcode);
 # }


 # function av_loaner($barcode) {
 #   if (in_array($barcode, $CB_AV)) {
  #    print("This chromebook is good to go!");  
  #  }
 # }
  
 # function av_charger_device($barcode_d, $barcode_c){
 #   echo "Devices that are currently ready to use";
 #   print_r($barcode_d);
 #   echo "Chargers that are currently ready to use";
 #   print_r($barcode_c);
 # }
  
 # function print_av() {
 #   global $CB_AV;
 #   foreach($CB_AV as $key) {
 #     echo $key;
 #   }
 # }  

 # print((int)end($ids));
 # print("\n");
 # print(count($ids));

 
?>

