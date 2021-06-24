<!DOCTYPE html>
<html>
<?php include('/Users/smol/fun/PHP_CB/final.php') ?>
<head>
<title>
Chromebook/Charger 
</title>
</head>

<body style="text-align:left;">

<h1 style="color:blue;">
Chromebook/Charger Loaner System
</h1>

<h4>
 Instructions: 
</h4>

<?php



?>

<form method="post">
<label for="ID number">Name</label>
  <div>
    <input type="text" name="name" id="name" value="">
  <div>
<label for="Barcode of the device(chromebook)">Chromebook_Barcode</label>
  <div>
    <input type="text" name="Chromebook_Barcode" id="CB" value="">
  <div>
<label for="Barcode of the charger">Charger_Barcode</label>
  <div>
    <input type="text" name="Charger_Barcode" id="Charger" value="">
  <div>
<input type="submit" class="Button" name="Submit" value="Submit"/>
</form>
</head>
</html>

