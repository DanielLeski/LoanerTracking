<!DOCTYPE html>
<html>
<?php include_once('/Users/smol/fun/LoanerTracking/backend/update.php'); 
     

?>

<head>
<div class="container">
<h1> Loaner System </h1>
<div class="title">
<br>
</div>

<?php
 #Inilizing objects that are needed
 $sqlUpdate = new sqlUpdater;

 $checkin_status = "unchecked";
 $checkout_status = "unchecked";

 #Starting to see if the submit button was clicked
 if(isset($_POST['Submit'])) {
  $selected_radio = $_POST['c'];
  #Checking if the button that was clicked was the checkout button
  if($selected_radio == "checkout") {
   if(isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
    $checkout_status = "checked";
    $id = $_POST['ID NUMBER'];
    $br = $_POST['Charger_Barcode'];
    #find_duplicates_in_c($id);
    loaner_charger($id);
    add_check_out_time_c($barcode);
   }elseif(isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") {
    $checkout_status = "checked";
    $id = $_POST['ID NUMBER'];
    $br = $_POST['Chromebook_Barcode'];
    if(find_duplicates_in_cb($id) === TRUE) {
     echo "Duplicate Student ID is found"; 
    }
    if(check_if_active_student($id) === TRUE && check_if_barcode_is_correcet($barcode) === TRUE) {
     echo "Student is an active";
     loaner_chromebook($id, $br);
     loaner_cb_log($id, $br);
     add_checkout_time_cb($barcode);
    } else {
     echo "Make sure student is active or check if the right id number is typed";
    }
   } else {
    $checkout_status = 'checked';
    $id = $_POST['ID NUMBER'];
    $brc = $_POST['Chromebook_Barcode'];
    $brcc = $_POST['Charger_Barcode'];
    if(find_duplicates_in_c($id) === TRUE || find_duplicates_in_cb($id) === TRUE) {
     echo "A duplicate entry has beeb found";
    }
    if(check_if_active_student($id) === TRUE && check_if_barcode_is_correct($barcode) === TRUE) {
     echo "Student is Active";
     loaner_charger($id);
     add_check_out_time_c($barcode);
     loaner_chromebook($id, $br);
     add_checkout_time_c($barcode);
     loaner_cb_log($id, $br);
     add_checkout_time_cb($barcode);
    }
   }
  } elseif($selected_radio == 'checkin') {
     if(isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
       $checkin_status = "checked";
       $id = $_POST['ID NUMBER'];
       $br = $_POST['Charger_Barcode'];
       return_charger($id, $br);
       set_check_out_back_to_null_c();
    } elseif (isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") {
       $checkedin_status = "chekced";
       $id = $_POST['ID NUMBER'];
       $br = $_POST['Chromebook_Barcode'];
       if(find_duplicates_in_cb($id) === TRUE) {
         echo "Duplicate Student ID is found";
       }
       if(check_if_active_student($id) === TRUE && check_if_barcode_is_correct($barcode) === TRUE) {
        return_chromebook($id, $br);
        add_checkin_to_chromebooks($id, $br);
        set_checkout_back_to_null_cb();
  } else {
       if(find_duplcates_in_c($id) === TRUE || find_duplicates_in_cb($id) === TRUE) {
         echo "Duplicates has been found with this id number '$id'";
  }
       if(check_if_active_student($id) === TRUE && check_if_barcode_is_correct($barcode) === TRUE) {
        return_charger($id, $br);
        set_check_out_back_to_null_c();
        return_chromebook($id, $br);
        add_checkin_to_chromebooks($id, $br);
        set_checkout_back_to_null_cb();
    }
   }
  }  
}

  if(isset($_POST['logout'])) {
   session_destroy();
   session_unset();
   header("Location:index.php");
  }
?>

<br>
<div class="con">
<form action="" method="POST">
<br>
<section class="app">
<i class="fa fa-rocket"></i>

<!-- Start of the button layout -->
<article>
<input type="checkbox" id="checkin" name="c" value="checkin"/>
<div>
<span>
Check In
</span>
</div>
</article>

<article>
<input type="checkbox" id="checkout" name="c" value="checkout"/>
<div>
<span>
Check Out
</span>
</div>
</article>

<article>
<input type="checkbox" id="repair" name="c" value="repair"/>
<div>
<span>
Repair
</span>
</div>
</article>

<article>
<input type="checkbox" id="returnRepair" name="c" value="returnRepair"/>
<div>
<span>
Out of Repair
</div>
</span>
</article>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- Start of the input of the user -->
<label for="ID Number">ID Number</label>
<div>
<input type="text" name="ID NUMBER" id="name" value=""/>
</div>
<div>
<label for="Barcode of the chromebook">Chromebook Barcode</label>
</div>
<div>
<input type="text" name="Chromebook_Barcode" id="CB" value=""/>
</div>
<div>
<label  for="Barcode of the Charger">Charger Barcode</label>
</div>
<div>
<input type="text" name="Charger_Barcode" id="charger" value=""/>
</div>
<div>
<br>
<input type="Submit" class="Button" name="Submit" value="Submit">
</div>
</form>
</head>

<!--- Debate if need to print out the tables here or from the php side -->
<div class="log">
<form action="index.php" method="POST">
<article class="logout">
<input type="checkbox" id="logout" name="logout"/>
<div>
<span>
Log Out
</span>
</div>
</article>
</div>
</form>

<!--- Style of the background and the tables --->
<style>


.tables, th, td {
  margin-left:auto;
  margin-right:auto;
padding: 2.5px;
         text-align: center;
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
}

fieldset{
float: left;
}

.log {
  display: flex;
  justify-content: 0 auto;
  align-items: center;
  margin:80px;
  position:absolute1;
}

body {
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
border: 2px solid #50bcf2;
        box-sizing: border-box;
}

article div {
width: 100%;
height: 100%;
display: flex;
         justify-content: center;
         align-items: center;
         line-height: 25px;
transition: .5s ease;
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

input[type=checkbox]:checked ~ div {
  background-color: #50bcf2;
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
background: #0077B5;
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
</html>
