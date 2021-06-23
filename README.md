# PHP_CB

## PHP Client for Chromebook Loaners

# TODO/ Plan:
- Be able to get the inital csv of the current setup of the chromebooks that are out of service.
  - Read in the current google sheets data and only the data that we care about
- Be able to modifiy the data
  - Add user in
  - Remove user
  - Let user enter in thier ID
  - Get the barcode/Serial number/ of the device that is being turned in
  - Get the barcode/Serial number/ of the device that is being checked out
  - Get in the time that the turn in process was done.
  - Get the item that such device is returned 

## Steps
- Create mysql to get table of data to show
- Get the arrays to contains each column that we need 
  - Getting in from the var_dump and indexing [] for columns

## Resources:
- https://webdiretto.it/to-extract-single-column-values-from-csv-file-php/
- https://www.cloudways.com/blog/connect-mysql-with-php/
- https://www.tutorialspoint.com/mysql/mysql-create-tables.html
- https://stackoverflow.com/questions/10227107/write-to-a-csv-in-node-js/33589528
- https://www.codecademy.com/articles/getting-user-input-in-node-js
-https://www.geeksforgeeks.org/how-to-call-php-function-on-the-click-of-a-button/
