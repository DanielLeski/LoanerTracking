<?php

#arrays made from to capture the data from all of csv columns
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

#Reading in the file 
$file = fopen('Table.Loaner.csv', 'r');
while(($row = fgetcsv($file, 0, ",")) != FALSE){
 $id = var_dump($row[0]);
}


foreach($id as $value) {
  echo $value;
}



?>
