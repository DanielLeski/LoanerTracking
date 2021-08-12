<?php

#Getting a connection to the mysql database
$servername = "127.0.0.1";
$username = "dan";
$password = "Password123#@!";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


class TableManagement {


function print_table() {
 global $conn;
 $sql = "SELECT * FROM CBcartAll";
 $result = $conn->query($sql);
 echo "<table border='1'>
 <tr>
 <th>AutoID</th>
 <th>Device</th>
 <th>Student_Number</th>
 <th>ITR</th>
 <th>SERIAL</th>
 <th>Check_in</th>
 <th>Check_out</th>
 <th>Availability</th>
 <th>LongTermRepair</th>
 <th>StudentDeviceInRepair</th>
 <th>ReferenceToCart</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
 echo '<tr>';
 echo '<td>' . $row['AutoID']. '</td>';
 echo '<td>' . $row['Device'] . '</td>';
 echo '<td>' . $row['Student_Number'] . '</td>';
 echo '<td>' . $row['ITR'] . '</td>';
 echo '<td>' . $row['SERIAL'] . '</td>';
 echo '<td>' . $row['Check_in'] . '</td>';
 echo '<td>' . $row['Check_out'] . '</td>';
 echo '<td>' . $row['Availability'] . '</td>';
 echo '<td>' . $row['LongTermRepair'] . '</td>';
 echo '<td>' . $row['StudentDeviceInRepair'] . '</td>';
 echo '<td>' . $row['ReferenceToCart'] . '</td>';
 echo '</tr>';
 }
 echo "</table>"; 
 }
 
# function print_row($row) {
#  global $conn;
#  $sql = "SELECT * FROM CBcartAll WHERE AutoID='$row'";
#  $result = $conn->query($sql);
#  while($row = mysqli_fetch_array($result)) {
#   $AutoID = $row['AutoID'];
#   $Device = $row['Device'];
#   $Student_Number = $row['ITR'];
#   $Serial = $row['SERIAL'];
#   $Check_in = $row['Check_in'];
#   $Check_out = $row['Check_out'];
#   $avail = $row['Availability'];
#   $ltm = $row['LongTermRepair'];
#   $SDIR = $row['StudentDeviceInRepair'];
#   $ReferenceCart = $row['ReferenceToCart'];
#   echo "<form action='' method='post'>
#        <input type='text' name='autoid' value='$AutoID'>
#        </form>";
#    }
#  }

 function update_mysql($id, $device, $itr, $serial, $rtc) {
   global $conn;
   $sql = "UPDATE CBcartAll SET Device='$device', ITR='$itr', SERIAL='$serial', ReferenceToCart='$rtc' WHERE AutoID='$id'";
   if($conn->query($sql)) {
    echo "Record is updated";
   } else {
    echo "Record is not updated";
   }
 }

 function insert_sql($id, $device, $itr, $Serial, $avail, $ltr, $rtc) {
  global $conn;
  $sql = "INSERT INTO CBcartAll(Device, ITR, SERIAL, Availability, LongTermRepair, ReferenceToCart) VALUES ('$device', '$itr', '$Serial', '$avail', '$ltr', '$rtc')";
  if($conn->query($sql)) {
   echo "Inserted record into table";
  } else {
   echo "Inserting record didn't work!";
  }
 }
}
?>
