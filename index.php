<!DOCTYPE html>
<html>
<?php include('/Users/smol/fun/PHP_CB/final.php')?>
<head>
<div class="container">
<h1>Loaner System</h1>
<div class="title">
<br>
</div>


<?php
   $checkin_status = 'unchecked';
   $checkout_status = 'unchecked';

   if (isset($_POST['Submit'])) {
    $selected_radio = $_POST['c'];
    if ($selected_radio == 'checkout') {
       if (isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
        $checkout_status = 'checked';
        $id = $_POST['name'];
        $br = $_POST['Charger_Barcode'];
        loaner_charger($id, $br);
        add_check_out_time_c($br);
    } elseif (isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") { 
        $checkout_status = 'checked';
        $id = $_POST['name'];
        $br = $_POST['Chromebook_Barcode'];
        loaner_chromebook($id, $br);
        find_duplicates($id);
        loaner_chromebook_cart1($id, $br);
        loaner_chromebook_cart2($id, $br);
        loaner_chromebook_cart3($id, $br);
        loaner_chromebook_cart4($id, $br);
        add_check_out_time_cb($br);
        loaner_cb_log($id, $br);
    } else {
        $checkout_status = 'checked';
        $id = $_POST['name'];
        $brc = $_POST['Chromebook_Barcode'];
        $brcc = $_POST['Charger_Barcode'];
        find_duplicates($id);
        loaner_charger($id,$brcc);
        add_check_out_time_c($br);
        loaner_chromebook($id, $br);
        loaner_chromebook_cart1($id, $br);
        loaner_chromebook_cart2($id, $br);
        loaner_chromebook_cart3($id, $br);
        loaner_chromebook_cart4($id, $br);
        add_check_out_time_cb($br);
        loaner_cb_log($id, $br);
    }

   } elseif ($selected_radio == 'checkin') {
       if (isset($_POST['Chromebook_Barcode']) && $_POST['Chromebook_Barcode'] === "") {
      $checkin_status = 'checked';
      $id = $_POST['name'];
      $br = $_POST['Charger_Barcode'];
      return_charger($id, $br);
      set_check_out_back_to_null_c();
  } elseif (isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === "") { 
      $checkin_status = 'checked';
      $id = $_POST['name'];
      $br = $_POST['Chromebook_Barcode'];
      return_chromebook($id, $br);
      add_checkin_to_cb1($br);
      add_checkin_to_cb2($br);
      add_checkin_to_cb3($br);
      add_checkin_to_cb4($br);
      set_check_out_back_to_null_cb();
      update_check_in_time_in_cb_log($id,$br);
      }
    } else {
        $checkin_status = 'checked';
        $id = $_POST['name'];
        $brc = $_POST['Chromebook_Barcode'];
        $brcc = $_POST['Charger_Barcode'];
        return_charger($id,$brcc);
        set_check_out_back_to_null_c();
        return_chromebook($id, $br);
        add_checkin_to_cb1($br);
        add_checkin_to_cb2($br);
        add_checkin_to_cb3($br);
        add_checkin_to_cb4($br);
        set_check_out_back_to_null_cb();
        update_check_in_time_in_cb_log($id, $brc);
    }
   }
?>

<div class="con">
<form action='' method="POST">
  <br>
  <label for="Checkout">Check Out</label>
  <input type="radio" id="checkout" name="c" value="checkout">
  <br>
  <label for="Checkin">Check In</label>
  <input type="radio" id="checkin" name="c" value="checkin">
</div>


<br>
<br>

<label for="ID number">ID Number</label>
<div>
<input type="text" name="name" id="name" value="">
<div>
<label for="Barcode of the device(chromebook)">Chromebook Barcode</label>
<div>
<input type="text" name="Chromebook_Barcode" id="CB" value="">
<div>
<label for="Barcode of the charger">Charger Barcode</label>
<div>
<input type="text" name="Charger_Barcode" id="Charger" value="">
<div>
<input type="submit" class="Button" name="Submit" value="Submit"/>
</form>
</head>


<br>
<br>
<br>


<div style="width:400px; margin: auto;">
<table style="float: left">
<tr>
<td><?php print_cb_carts_random_c1(); ?></td>
</tr>
</table>
<table style="float: left">
<tr>
<td><?php print_cb_carts_random_c2(); ?></td>
</tr>
</table>
<table style="float: left">
<tr>
<td><?php print_cb_carts_random_c3(); ?></td>
</tr>
</table>
<table style="float: left">
<tr>
<td><?php print_cb_carts_random_c4(); ?></td>
</tr>
</table>
</div>





<style>
@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,300italic,500);
*{
margin: 0px;
padding: 0px;
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
</style>

<meta http-equiv="refresh" content="3600">

</html>
