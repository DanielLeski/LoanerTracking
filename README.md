# LoanerTracking

## PHP Client for Chromebook Loaners

### Step 1: Have a requirement list
### Step 2: Work with people that know what they want .. gl

## Overview:
This is a quickly made project to track students on who, what, when checked out a device such as a laptop or charger and if they returned it back in or not.

This uses mySQL to track information into a database but the commented code within the "final.php" can be used for local storage type of tracking if mySQL is not needed. 



## Instructions to use / Test:
- Unit Test 1
 - Step 1
    - Register yourself as a user. You will need a admin (Dr.eb) to get you the access code to setup your account. 
    - To register you will need to first get an access code.
    - Click the register radio button
    - Insert username, password, Role, Carts (WBCB1 and etc), Access Code that you recieved
    - Click Enter or the register button
 - Step 2
   - Login in with the current login that your just created 
   - Make sure all of the buttons work meaning (clickable, highlight when clicked)
   - Make user the input (username(ID Number), Chromebook Barcode, Charger Barcode) get displayed after clicking/selecting a button
  - Check mysql if the record is updated correctly
 - Step 3
   - Make sure when clicking 'cancel' reloads the page, and updates the WBCB Cart table.
   - Make sure the logout button redirects back to the login screen (index.php)
- Unit Test 2
 - Step 1
  - Go back to the register screen
  - Use the same type of procedure with the register radio button but now test 'Modify' (modify changes a persons role (admin or regular))
  - Check mysql if the information is updated in the users (use your account that was created earlier in the process, don't worry if you want your admin status badge back you have to talk to dan .. )
 - Step 2
   - With either being a regular user or admin before hand check if the you get redirected to the correct page. For example, regular user should see "10.2.50.92/regularUser.php" and for admin you should see "10.2.50.92/adminUser.php"
- Unit Test 3
 - Step 1
   - Go back to the register screen
   - Toggle modify Carts for user
   - Follow the same procedure as you would wit the access code from the last 2 options
 - Step 2
   - Change the carts that your user can see (format: WBCB1,WBCB2, etc up to WBCB6)
   - Change mysql if the record has been updated
   - Login in with the user you created and see if thetable of the Carts that display are changed. 
