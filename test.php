<?php
 
 $filename = "/Users/smol/fun/PH_CB/"; 
 $row = 1;
 echo "<html><body><table>\n\n"
 $f = fopen("{$filename}", 'r');
 while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
       echo "<td>" . htmlspecialchars($cell) . "</td>"
      }
      echo "</tr>\n"
 }
fclose($f);
echo "\n</table></body></html>";
?>
