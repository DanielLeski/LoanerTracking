<?php
 $row = 1;
 echo "<html><body><table>\n\n"
 $f = fopen("", 'r');
 while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
       echo "<td>" . htmlspecialchars($cell) . "</td>"l

      }
      echo "</tr>\n"
 }
fclose($f);
echo "\n</table></body></html>";
?>
