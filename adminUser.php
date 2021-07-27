<!DOCTYPE html>
<html>
<?php include_once('/Users/smol/fun/LoanerTracking/backend/update.php'); 
      include_once('/Users/smol/fun/LoanerTracking/backend/user.php');
?>
<body onload="removeInputsAndCarts()">
<div class="container">
<h1> Loaner System </h1>
<div class="title">
<br>
</div>
<script type=text/javascript>
function removeInputsAndCarts() {
 document.getElementById('input').style.display = "none";
}
</script>

<?php
 #Inilizing objects that are needed
  $sqlUpdate = new sqlUpdater;
  $users = new User;

 $checkin_status = "unchecked";
 $checkout_status = "unchecked";
 $repair_status = "unchecked";
 $repair_return_status = "unchecked";
 $long_term_repair_status = "unchecked";

 #Starting to see if the submit button was clicked
 if(isset($_POST['Submit'])) {
  $selected_radio = $_POST['c'];
  #Checking if the button that was clicked was the checkout button
  if($selected_radio == "checkout") {
   if(isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
    $checkout_status = "checked";
    $id = $_POST['name'];
    $br = $_POST['Charger_Barcode'];
    if($sqlUpdate->find_duplicates_in_c($id)) {
     echo "Duplicate for this id is found!";
    }
    $sqlUpdate->loaner_charger($id);
    $sqlUpdate->add_check_out_time_c($barcode);
   }elseif(isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") {
    $checkout_status = "checked";
    $id = $_POST['name'];
    $br = $_POST['Chromebook_Barcode'];
    if($sqlUpdate->find_duplicates_in_cb($id) === TRUE) {
     echo "Duplicate Student ID is found"; 
    }
    if($sqlUpdate->check_if_active_student($id) === TRUE OR $sqlUpdate->check_if_active_staff($id) && $sqlUpdate->check_if_barcode_is_correcet($barcode) === TRUE) {
     echo "User is active";
     $sqlUpdate->loaner_chromebook($id, $br);
     $sqlUpdate->loaner_cb_log($id, $br);
     $sqlUpdate->add_checkout_time_cb($br);
    } else {
     echo "Make sure student is active or check if the right id number is typed";
    }
   } else {
    $checkout_status = 'checked';
    $id = $_POST['name'];
    $brc = $_POST['Chromebook_Barcode'];
    $brcc = $_POST['Charger_Barcode'];
    if($sqlUpdate->find_duplicates_in_c($id) === TRUE || $sqlUpdate->find_duplicates_in_cb($id) === TRUE) {
     echo "A duplicate entry has beeb found";
    }
    if($sqlUpdate->check_if_active_student($id) === TRUE OR $sqlUpdate->check_if_active_staff($id) && $sqlUpdate->check_if_barcode_is_correct($barcode) === TRUE) {
     echo "Student is Active";
     $sqlUpdate->loaner_charger($id);
     $sqlUpdate->add_check_out_time_c($barcode);
     $sqlUpdate->loaner_chromebook($id, $br);
     $sqlUpdate->add_checkout_time_c($barcode);
     $sqlUpdate->loaner_cb_log($id, $br);
     $sqlUpdate->add_checkout_time_cb($barcode);
    }
   }
  } elseif($selected_radio == 'checkin') {
     if(isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
       $checkin_status = "checked";
       $id = $_POST['name'];
       $br = $_POST['Charger_Barcode'];
       $sqlUpdate->return_charger($id, $br);
       $sqlUpdate->set_check_out_back_to_null_c();
    } elseif (isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") {
       $checkedin_status = "chekced";
       $id = $_POST['name'];
       $br = $_POST['Chromebook_Barcode'];
       if($sqlUpdate->find_duplicates_in_cb($id) === TRUE) {
         echo "Duplicate Student ID is found";
       }
       if($sqlUpdate->check_if_active_student($id) === TRUE OR $sqlUpdate->check_if_active_staff && $sqlUpdate->check_if_barcode_is_correct($barcode) === TRUE) {
        $sqlUpdate->return_chromebook($id, $br);
        $sqlUpdate->add_checkin_to_chromebooks($id, $br);
        $qslUpdate->set_checkout_back_to_null_cb();
  } else {
       if($sqlUpdate->find_duplcates_in_c($id) === TRUE || $sqlUpdate->find_duplicates_in_cb($id) === TRUE) {
         echo "Duplicates has been found with this id number '$id'";
  }
       if($sqlUpdate->check_if_active_student($id) === TRUE OR $sqlUpdate->check_if_active_staff($id) &&  check_if_barcode_is_correct($barcode) === TRUE) {
        $sqlUpdate->return_charger($id, $br);
        $sqlUpdate->set_check_out_back_to_null_c();
        $sqlUpdate->return_chromebook($id, $br);
        $sqlUpdate->add_checkin_to_chromebooks($id, $br);
        $sqlUpdate->set_checkout_back_to_null_cb();
    }
   }
  } 
 } elseif($selected_radio == "repair") {
     if(isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
      $repair_status = "checked";
      $barcode = $_POST['Charger_Barcode']; 
      if($sqlUpdate->check_if_barcode_is_correct($barcode) === TRUE) {
       $sqlUpdate->charger_to_repair($br);
      }

 } elseif(isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") {
     $repair_status = "checked";
     $barcode = $_POST['Chromebook_Barcode'];
     if($sqlUpdate->check_if_barcode_is_correct($barcode) === TRUE) {
      $sqlUpdate->set_chromebook_to_repair($barcode);
    }
   }
  } elseif($selected_radio == "returnRepair") {
     if(isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
      $repair_return_status = 'checked';
      $barcode = $_POST['Charger_Barcode'];
      if($sqlUpdate->check_if_barcode_is_correct($barcode) === TRUE) {
       $sqlUpdate->charger_out_of_repair($barcode);
      }
  } elseif(isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") {
     $repair_return_status = "checked";
     $barcode = $_POST['Chromebook_Barcode'];
     $sqlUpdate->chromebook_out_of_repair($barcode);
  }
 } elseif($selected_radio == "LongTermRepair") {
     $long_term_repair = 'checked';
     $barcode = $_POST['Chromebook_Barcode'];
     $sqlUpdate->chromebook_long_term_repair($barcode);
 }
}

  if(isset($_POST['logout'])) {
   session_destroy();
   session_unset();
   header("Location:index.php");
  }
  
  if(isset($_POST['cancel'])) {
   header("Location:adminUser.php");
  }

?>

<br>
<div id="con" class="con">
<form action="" method="POST">
<br>
<section class="app">
<i class="fa fa-rocket"></i>

<!-- Start of the button layout -->
<article class="chckin" id="chckin">
<input type="checkbox" id="checkin" name="c" value="checkin" onclick="cin()"/>
<div id="cin" class="cin">
<span style="text-align:center">
Check In Device
</span>
</div>
</article>

<article class ="chckout" id="chckout">
<input type="checkbox" id="checkout" name="c" value="checkout" onclick="cout()"/>
<div id="cout" class="cout">
<span>
Check Out Device
</span>
</div>
</article>

<article id="repairDevice" class="repair">
<input type="checkbox" id="repair" name="c" value="repair" onclick="repair1()"/>
<div id="rp" class="rp">
<span>
Repair Device
</span>
</div>
</article>

<article id="returnRepair" class="returnRepair">
<input type="checkbox" id="returnRepair" name="c" value="returnRepair" onclick="returnRepair1()"/>
<div id="returnp" class="returnp">
<span>
Device Out of Repair
</span>
</div>
</article>

<article id="longTermLoanerDevice" class='ltr'>
<input type="checkbox" id="LongTermRepair" name="c" value="LongTermInreturnRepair" onclick="longTermRepairForStudent()"/>
<div class="ltld">
<span>
Long Term Loaner Device
</span>
</div>
</article>

<article id="outOfLongTermLoaner" class='oltr'>
<input type="checkbox" id="LongTermRepair" name="c" value="LongTermreturnRepair" onclick="returnLongTermRepair()"/>
<div class="ooltl">
<span>
Out Of Long Term Loaner
</span>
</div>
</article>

<script language="JavaScript" type="text/javascript">

function cin() {
   //document.getElementById('input').style.display = "none"; 
   document.getElementById('chckout').style.display = "none"
   document.getElementById('repairDevice').style.display = "none";
   document.getElementById('returnRepair').style.display = "none";
   document.getElementById('longTermLoanerDevice').style.display = "none";
   document.getElementById('outOfLongTermLoaner').style.display = "none";
   var p = document.getElementById('chckin');
   p.setAttribute('style', 'top:-10px;left:70px;');
   document.getElementById('input').style.display = "block";
}

function cout() {
   document.getElementById('chckin').style.display = "none";
   document.getElementById('repairDevice').style.display = "none";
   document.getElementById('returnRepair').style.display = "none";
   document.getElementById('longTermLoanerDevice').style.display = "none";
   document.getElementById('outOfLongTermLoaner').style.display = "none";
   var p = document.getElementById('chckout');
   p.setAttribute('style', 'top:-10px;left:70px;');
   document.getElementById('input').style.display = "block";

 }

 function repair1() {
   document.getElementById('chckin').style.display = "none";
   document.getElementById('chckout').style.display= "none";
   document.getElementById('returnRepair').style.display = "none";
   document.getElementById('longTermLoanerDevice').style.display = "none";
   document.getElementById('outOfLongTermLoaner').style.display = "none";
   var p = document.getElementById('repairDevice');
   p.setAttribute('style', 'top:-10px;left:70px;');
   document.getElementById('input').style.display = "block";

}

function returnRepair1() { 
   document.getElementById('chckin').style.display = "none";
   document.getElementById('chckout').style.display= "none";
   document.getElementById('repairDevice').style.display = "none";
   document.getElementById('longTermLoanerDevice').style.display = "none";
   document.getElementById('outOfLongTermLoaner').style.display = "none";
   var p = document.getElementById('returnRepair');
   p.setAttribute('style', 'top:-10px;left:70px;');
   document.getElementById('input').style.display = "block";

}

function longTermRepairForStudent() {
   document.getElementById('chckin').style.display = "none";
   document.getElementById('chckout').style.display = "none";
   document.getElementById('repairDevice').style.display = "none";
   document.getElementById('returnRepair').style.display = "none";
   document.getElementById('outOfLongTermLoaner').style.display = "none";
   var p = document.getElementById('longTermLoanerDevice');
   p.setAttribute('style', 'top:-10px;left:70px;');
   document.getElementById('input').style.display = "block";

}

function returnLongTermRepair() {
   document.getElementById('chckin').style.display = "none";
   document.getElementById('chckout').style.display = "none";
   document.getElementById('repairDevice').style.display = "none";
   document.getElementById('returnRepair').style.display = "none";
   document.getElementById('longTermLoanerDevice').style.display = "none";
   var p = document.getElementById('outOfLongTermLoaner');
   p.setAttribute('style', 'top:-10px;left:70px;');
   document.getElementById('input').style.display = "block";

 }
</script>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="input" class="input">
<!-- Start of the input of the user -->
<label for="name">ID Number</label>
<br>
<div>
<br>
<input style="font-size:12pt;" type="text" name="name" id="name" value=""/>
</div>
<br>
<div>
<label style="font-size:12pt;" for="Barcode of the chromebook">Chromebook Barcode</label>
</div>
<br>
<div>
<input style="font-size:12pt;" type="text" name="Chromebook_Barcode" id="CB" value=""/>
</div>
<br>
<div>
<label style="font-size:12pt;" for="Barcode of the Charger">Charger Barcode</label>
</div>
<br>
<div>
<input style="font-size:12pt;" type="text" name="Charger_Barcode" id="charger" value=""/>
</div>
<br>
<div>
<br>
<input style="font-size:12pt;" type="submit" class="Button" id="submitInfo" name="Submit" value="Submit">
</div>
</form>
</div>


<br>
<div id='data' style="width:300px;" class="t">
<table>
<tr>
<td><?php 
   $users->parse_array($_SESSION['username']);         
?>
</td>
</tr>
</table>
</div>

<!--- Debate if need to print out the tables here or from the php side -->
<div class="log">
<form action="index.php" method="POST">
<article>
<input type="submit" id="logout" name="logout" value="logout"/>
<div>
<span>
Log Out
</span>
</div>
</article>
</div>
</form>

<div class="cancel">
<form action="adminUser.php" method="POST">
<article>
<input type="submit" id="cancel" name="cancel" value="cancel"/>
<div>
<span>
Cancel
</span>
</div>
</article>
</div>
</form>



<!--- Style of the background and the tables --->
<style>

span {
position: relative;
top: 30px; 
}

table, th, td {
  margin-left:auto;
  margin-right:auto;
  padding: 2.5px;
  text-align: center;
  display:flex;
}

@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,300italic,500);
*{
margin: 0px;
padding: 0px;
}

.tables {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: center;
  align-items: center;
  align-content: stretch;
}


fieldset{
 float: center;
 top:50px;
}

.t {
 top: 50px;
 margin: auto;
}

.log {
  position:absolute;
  bottom: 200px;
  left:780px;
  top:800px;
}

.cancel {
  position:absolute;
  bottom: 200px;
  left:1000px;
  top:800px;
}

.data {
 position:relative;
 right:50px;
}
 
input[type=submit] {
 padding: 16px 32px;
 border: none;
 cursor: pointer;
}

body {
width:1920px;
height:1080px;
background: rgb(18, 181, 231);
}
.container{
overflow: hidden;
          text-align: center;
background: -moz-linear-gradient(top,  rgba(169,228,247,1) 0%, rgba(15,180,231,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(169,228,247,1) 0%,rgba(15,180,231,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(169,228,247,1) 0%,rgba(15,180,231,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a9e4f7', endColorstr='#0fb4e7',GradientType=0 ); /* IE6-9 */
}
h1 {
  font-family: 'Ubuntu', sans-serif;
color: rgba(255, 255, 255, 0.65);
       font-size: 120px;
margin: 20px 0px;
        font-weight: 100;
}
@media screen and (max-width: 480px){
  h1{
    font-size: 48px;
  }
#map{
width: 100%;
       margin-top: 25px !important;
}
.title ul li{
padding: 8px 0px !important;
}
li a{
padding: 9px 10px !important;
}
.title {
  margin-top: 30px;
}
}
.title ul li {
  list-style: none;
  font-family: 'Ubuntu', sans-serif;
display: inline-block;
border: #fff solid 2px;
        border-radius: 50px;
padding: 10px 0px;
margin: 5px;
}
li a{
  text-decoration: none;
color: #fff;
       -webkit-transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955); 
       -moz-transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955); 
       -o-transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955); 
transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
padding: 10px 20px
}
li a:hover{
background: #fff;
color: #1db8e8;
       border-radius: 50px;
}

#map{
  margin-top: 40px;
}
.styled {
border: 0;
        line-height: 2.5;
padding: 0 20px;
         font-size: 1rem;
         text-align: center;
color: #fff;
       text-shadow: 1px 1px 1px #000;
       border-radius: 10px;
       background-color: rgba(220, 0, 0, 1);
       background-image: linear-gradient(to top left,
           rgba(0, 0, 0, .2),
           rgba(0, 0, 0, .2) 30%,
           rgba(0, 0, 0, 0));
       box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
         inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
  background-color: rgba(255, 0, 0, 1);
}

.styled:active {
  box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
    inset 2px 2px 3px rgba(0, 0, 0, .6);
}

.c1 {
  margin-right: 250px;
  margin-left: 240px;
width: 60%;
       text-align: right;
width: 5px;
clear: both;
}

.c1 input {
width: 50%;
clear: both;
}

.c2 {
  margin-right: 250px;
  margin-left: 240px;
width: 60%;
       text-align: right;
width: 5px;
clear: both;
}

.c2 input {
width: 50%;
clear: both;
}
.tableClass td{
  text-align: center;
}

td {
  text-align: right;
}
.app {
  max-width: 300px;
margin: 0 auto;
}

.app i {
  font-size: 80px;

  animation-duration: 3s;
  animation-name: slidein;
  animation-iteration-count: 1;
}

article {
position: relative;
width: 140px;
height: 100px;
margin: 5px;
float: left;
border: 3px solid #add8e6;
box-sizing: border-box;
}

article div {
width: 100%;
height: 100%;
display: flex-start;
         justify-content: center;
         align-items: center;
         line-height: 25px;
transition: .5s ease;
text-align: center;
}

article input {
position: absolute;
top: 0;
left: 0;
width: 140px;
height: 100px;
opacity: 0;
cursor: pointer;
}



.input {
 position: absolute;
 text-align: center;
 left:850px;
 top: 475px;
}

.con {
 text-align: center;
}


.chckin {
 right:75px;
}

.chckout {
 right:70px;
}

.repair {
 width:140.5px;
 bottom: 110px;
 left:230px;
 margin: 2 auto;
}

.returnRepair {
 bottom:110px;
 right:75px;
}

.ltr {
 bottom:110px;
 right:70px;
}

.oltr {
 bottom:220px;
 right:-230px; 
}

.submitInfo {
 padding 15px 32px;
 text-align: center;
 display: inline-block;
 font-size: 18px;
}

button {
  padding 15px 32px;
 text-align: center;
 display: inline-block;
 font-size: 16px;
}

input[type=checkbox]:checked ~ div {
  background-color: #d8d8d8;
}

.upgrade-btn:hover {
  background-color: #50bcf2;
}

.blue-color {
color: #50bcf2;
}

.gray-color {
color: #555;
}

.social i:before {
width: 14px;
height: 14px;
position: fixed;
color: #fff;
padding: 10px;
         border-radius: 50%;
top:5px;
right:5px;
}

@keyframes slidein {
  from {
    margin-top: 100%;
width: 300%;
  }

  to {
margin: 0%;
width: 100%;
  }
}

.dark-mode {
  background-color:black;
color:white;
}

.dark{
  background-color: #222;
color: #e6e6e6;
}
</style>
<meta http-equiv="refresh" content="3600;"/>
</body>
</html>
