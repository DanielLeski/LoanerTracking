# LoanerTracking

## PHP Client for Chromebook Loaners

### Step 1: Have a requirement list
### Step 2: Work with people that know what they want .. gl

## Overview:
This is a quickly made project to track students on who, what, when checked out a device such as a laptop or charger and if they returned it back in or not.

This uses mySQL to track information into a database but the commented code within the "final.php" can be used for local storage type of tracking if mySQL is not needed. 

## Updating a table like powerschool:
1. Have a csv file ready to use containing the student numbers in a column
2. Place that csv into the powerschool folder
3. Truncate the table using the mysql command TRUNCATE [table] table_name
    - TRUNCATE ps;
5. Go to the sql folder 
6. run the command "java -jar sqlparser1.0.0-SNAPSHOT.jar powerschool.properties /home/administrator/UpdatedTableInformation/powerschool/yourpowerschoolinfohere.csv"


## WORK THAT IS LEFT:







