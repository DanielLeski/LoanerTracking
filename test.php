<?php
<<<<<<< HEAD
=======
# $servername = 'localhost';
# $username = 'username';
# $password = 'password';
  
# $conn = new mysqli($servername, $username, $password)
>>>>>>> 9cd6c5478847b45520fd682767cee60261f62337

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

#reading the file and getting the information to each array
$filename = "/Users/smol/fun/PH_CB/Table.Loaner.csv"; 
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
 
 barcode: <input type="barcode(ITR)" name="ITR" value="<?php echo $barcode;?>">
 </textarea>

<<<<<<< HEAD
=======
 #$filename = "/Users/smol/fun/PH_CB/Table.Loaner.csv"; 
 $row = 1;
 if (($handle = fopen('Table.Loaner.csv', 'r')) != FALSE) {
  while (($data = fgetcsv($handle, 1000, ',')) != FALSE) {
      $num = count($data);
      echo "<p> $num fields in line $row: <br /></p>\n";
		  $row++;
		  for ($c=0; $c < $num; $c++) {
			  echo $data[$c] . "<br />\n";
		}
	}
	fclose($handle);
 }
>>>>>>> 9cd6c5478847b45520fd682767cee60261f62337

?>
