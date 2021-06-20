<?php
$file = fopen('Table.Loaner.csv', 'r');
while(($row = fgetcsv($file, 0, ",")) != FALSE){
  var_dump($row);
}

?>
