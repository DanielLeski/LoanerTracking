# PHP_CB

## PHP Client for Chromebook Loaners

### Little PHP and mySQL project while learning from scratch

## Overview:
This is a quickly made project to track students on who, what, when checked out a device such as a laptop or charger and if they returned it back in or not.

This uses mySQL to track information into a database but the commented code within the "final.php" can be used for local storage type of tracking if mySQL is not needed. 


## WORK THAT IS LEFT:
- Prevent mySQL injections
  - This was kind of overlooked because this was done on the fly while learning the materials needed to complete the project, looking to implement this soon. But where it's being deployed it'll sure it's purpose.
- Implement mySQL triggers
  - This will make logging changes into a table that is meant for logs a little nicer in my opinion instead of writing another method ffor INSERT
- Send emails to the students after a specific amount of time after check out
