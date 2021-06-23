<?php

$id = array();
$student_number = array();
$first_name = array();
$last_name = array();
$ITR = array();
$Serial = array();
$MAC = array();
$PART_NUMBER = array();
$GROUP = array();
$CHECK_OUT = array();
$STATUS = array();
$CHECK_IN = array();
$id = 0;
$device_barcode = 0;
$charger_barcode = 0;

#reading the file and getting the information to each array
$file = fopen('Table.Loaner.csv', 'r');
while (($row = fgetcsv($file, 0, ',')) != FALSE) {
  array_push($id, $row[0]);
  array_push($student_number, $row[1]);
  array_push($first_name, $row[2]);
  array_push($last_name, $row[3]);
  array_push($ITR, $row[4]);
  array_push($Serial, $row[5]);
  array_push($MAC, $row[6]);
  array_push($PART_NUMBER, $row[7]);
  array_push($GROUP, $row[8]);
  array_push($CHECK_OUT, $row[9]);
  array_push($STATUS, $row[10]);
  array_push($CHECK_IN, $row[11]);
}

$loan = readline("Do you want to loan a (Pick a number)\n1.Charger\n2.Chromebook\n3.Both\n");
$loan = (int)$loan;

switch($loan) {
  case 1:
    $id = (int)readline("Enter your id number \n");
    $device_barcode = (int)readline("Enter the barcode of the device \n");
  case 2:
    $id = (int)readline("Enter your id number \n");
    $charger_barcode = (int)readline("Enter the barcode of the charger \n");
  case 3:
    $id = (int)readline("Enter id number \n");
    $device_barcode = (int)readline("Enter the barcode of the device \n");
    $charger_barcode = (int)readline("Enter the barcode of the charger \n");

}


?>

