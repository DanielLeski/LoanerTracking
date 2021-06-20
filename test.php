<?php
# $servername = 'localhost';
# $username = 'username';
# $password = 'password';
  
# $conn = new mysqli($servername, $username, $password)


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

?>
