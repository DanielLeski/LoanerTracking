<?php
#information storage for all of the columns
$id = [];
$student_number = [];
$first_name = [];
$last_name = [];
$ITR = [];
$Serial = [];
$MAC = [];
$PART_NUMBER = [];
$GROUP = [];
$CHECK_OUT = [];
$STATUS = [];
$CHECK_IN = [];


#Array for the chromebooks that are being taken out as for loaners
$CB_TAKEN = [];
$student_id = [];


#Chromebooks that are ready to be taken out
$CB_AV = [];
$TIME_CHECKED_OUT = [];
$TIME_CHECKED_IN = [];

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
 
 #Enter the students ID
 echo "Enter your student ID # ";
 $stu_num = rtrim(fgets(STDIN));
 array_push($student_id, $stu_num);

 #Get the time that it has been checked out 
 $current = time();
 $currentDate = date('Y-m-d', $current);
 array_push($TIME_CHECKED_OUT, $currentDate);


 #Check if the user ID is present within the loaned out table
 #Let them check it in and grab the current time of that action
 
 #get user input to do a specific action
 echo "Use numbers(integers as input)\n ";
 echo "Do you want to: \n";
 echo "1. Turn in a chromebook\n";
 echo "2. Check out a chromebook\n";
 echo "3. Get list of the available\n"; 
 $user_option = (int)readline('Enter one of the choices given above: ');
 switch ($user_option) {
  case 1:
    turnin();
    break;
  case 2: 
    checkout();
    break;
  case 3:
    listofLoanersAv();
    break;
 }

 #gets the user to turn in the chromebook
 function turnin() {
   
 }

 #get the user to checkout the chromebook
 function checkout() {
  echo "Barcode of the device that you are checking out";
  $barcode = rtrim(fgets(STDIN));
  if (!in_array($barcode, $CB_AV)) {
    echo "This chromebook isn't updated correctly, wasn't checked in properly";
    #moving it for now to the av array to make it avialable and then take it out and place it in the 
    array_push($CB_AV, $barcode);
  }else {
    echo "The Chromebook's barcode is " . $barcode;
    array_push($CB_TAKEN, $barcode);
   }
 } 

 function 

 #print the loaners that are aviable
 function listOfLoanersAv() {

 } 

  #remove the chrome from the list that are able to be given out
 function removeFromLoaners() {

 }

 function remove($array, $remove) {

 }

?>

