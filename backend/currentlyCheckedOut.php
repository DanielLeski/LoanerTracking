<?php


$servername = "127.0.0.1";
$username = "root";
$password = "pk1212";
$db_name = "newphp";
$conn = mysqli_connect($servername, $username, $password, $db_name);


  $result = mysqli_query($conn, "SELECT * FROM cbcart1, cbcart2, cbcart3, cbcart4 WHERE Check_out IS NOT NULL");

echo "<table border='1'>
<tr>
<th>Student Number</th>
<th>Checked_out</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Student_Number'] . "</td>";
echo "<td>" . $row['Checked_out'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

