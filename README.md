# LoanerTracking

## PHP Client for Chromebook Loaners

## Overview:
This is a quickly made project to track students on who, what, when checked out a device such as a laptop or charger and if they returned it back in or not.

This uses mySQL to track information into a database but the commented code within the "final.php" can be used for local storage type of tracking if mySQL is not needed. 

## Updating a table like powerschool:
1. Have a csv file ready to use containing the student numbers in a column
3. Place that csv into the powerschool folder
4. Log into mysql -u dan -p
5. Type in the command "use newphp"
6. Truncate the table using the mysql command TRUNCATE [table] table_name
    - TRUNCATE ps;
7. Go to the sql folder 
8. run the command "java -jar sqlparser1.0.0-SNAPSHOT.jar powerschool.properties /home/administrator/UpdatedTableInformation/powerschool/yourpowerschoolinfohere.csv"
9. Copy all of the commands that start with "INSERT INTO" to a document or place it into your clipboard. 
10. Enter all of those commands into mysql. 
11. Click enter
12. Type the command in "SELECT * FROM ps;" To make sure that all of the data has been imported.


## WORK THAT IS LEFT:







