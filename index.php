<!DOCTYPE html>
<html>
<?php include('/Users/smol/fun/PHP_CB/final.php')?>
<head>
<title>
Chromebook/Charger Loaner System 
</title>
</head>

<body style="text-align:left;">

<h1 style="color:blue;">
Chromebook/Charger Loaner System
</h1>
<h2>
PLEASE RETURN YOUR DEVICE AT THE END OF THE DAY
</h2>
<h4>
Check Out Instructions:
<br> 
1. Enter your ID number
<br>
2. Take the Chromebook and or Charger from the correct place that is given
<br>
3. Enter the barcode of the Chromebook, Charger, or both within the text fields
<br>
4. Press enter or click submit.
<br>

</h4>

<h2 style="color:LightSlateGrey"> 
Checking Out
</h2>

<?php
if(isset($_POST["Chromebook_Barcode"]) && $_POST['Chromebook_Barcode'] === ""):
$id = $_POST['name'];
$br = $_POST['Charger_Barcode'];
loaner_charger($id, $br);
elseif (isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === ""):
$ids = $_POST['name'];
$brs = $_POST['Chromebook_Barcode'];
loaner_chromebook($ids, $brs);
loaner_cb_log($ids, $brs);

endif;
?>

<table border='1'>
<tr>
<br>
<th>Chargers that are Available
<td>
<?php 
print_av_chargers();
?>
</td>
</th>
</tr>  
</table>

<table border='1'>
<tr>
<br>
<th>Chromebooks that are Available
<td>
<?php 
print_av_cb();
?>
</td>
</th>
</tr>  
</table>


<?php
if(isset($_POST["Chromebook_Barcode"]) && $_POST['Chromebook_Barcode'] === ""):
$br = $_POST['Charger_Barcode'];
add_check_out_time_c($br);
endif; 
if (isset($_POST['Charger_Barcode']) && $_POST['Charger_Barcode'] === ""):
$brs = $_POST['Chromebook_Barcode'];
add_check_out_time_cb($brs);
endif;
?>
<br>

<form action='' method="post">
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


<br>
<br>
<br>

<?php
if(isset($_POST["cb_b"]) && $_POST['cb_b'] === ""):
$id = $_POST['id'];
$br = $_POST['c_b'];
return_charger($id, $br);
set_check_out_back_to_null_c();
elseif (isset($_POST['c_b']) && $_POST['c_b'] === ""):
$ids = $_POST['id'];
$brs = $_POST['cb_b'];
return_chromebook($ids, $brs);
set_check_out_back_to_null_cb();
update_check_in_time_in_cb_log($ids, $brs);
else:
endif;
?>

<h4>
Check In Instructions:
<br> 
1. Enter your ID number
<br>
2. Enter the barcode of the Chromebook, Charger, or both within the text fields
<br>
3. Press enter or click submit.
<br>

</h4>
<h2 style="color:LightSlateGray;">
Checking In 
</h2>
<form action='' method="post">
<label for="ID number">ID Number</label>
<div>
<input type="text" name="id" id="name" value="">
<div>
<label for="Barcode of the device(chromebook)">Chromebook Barcode</label>
<div>
<input type="text" name="cb_b" id="cb" value="">
<div>
<label for="Barcode of the charger">Charger Barcode</label>
<div>
<input type="text" name="c_b" id="C" value="">
<div>
<input type="submit" class="Button" name="Submit" value="Submit"/>
</form>

</head>
</html>
