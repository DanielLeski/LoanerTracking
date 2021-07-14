<!DOCTYPE html>

<html lang="en">
<?php
 include_once('/home/administrator/LoanerTracking/register.php'); 
 include_once('/home/administrator/LoanerTracking/mailer.php');
?>

<head>
  <meta charset="UTF-8">
  <title>Register/Modify</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body{font: 14px sans-serif;}
    .wrapper{width: 360px; padding: 20px;}
  </style>
  </head>
<?php
 $register_selected = 'unchecked';
 $modify_selected = 'unchecked';
 if(isset($_POST['submit'])) {
	 $selected_radio = $_POST['c'];
	 if($selected_radio === null) {
		 echo "Please choose to either register or modify";
	 }
	 if($selected_radio == 'register') {
		 $register_selected = 'checked';
		 $user = $_POST['username'];
		 $ps = $_POST['password'];
		 $role = $_POST['role'];
		 $code = $_POST['access'];
		 adding_user($user, $ps, $role, $code);
		 header("Location:index.php");
	 } elseif($selected_radio == 'modify')	{
		 $modify_selected = 'checked';
		 $user = $_POST['username'];
		 $ps = $_POST['password'];
		 $role = $_POST['role'];
		 $code = $_POST['access'];
		 modify_user($user, $ps, $role, $code);
		 header("Location:index.php");
	 }
 }
 if(isset($_POST['email'])) {
    $user = $_POST['mail'];
    send_email_access_code($user);
 } 


 if(isset($_POST['backtologin'])) {
   header("Location:index.php");
 }
?>
<body>
  <div class="wrapper">
  <h2>Register</h2>
  <p>Please fill in username and password to create user</p>

<div class="con">
<form action='' method="POST">
  <br>
  <label for="Register">Register</label>
  <input type="radio" id="register" name="c" value="register">
  <br>
  <label for="Modify">Modify</label>
  <input type="radio" id="modify" name="c" value="modify">
</div>

<form action="" method="post">
  <div class="form-group">
  <label>Username</label>
  <input type="text" name="username">
 </div>

<div class="form-group">
  <label>Password</label>
  <input type="password" name="password">
  </div>
<div class="form-group">
  <label>Role</label>
  <input type="role" name="role">
  </div>
<div class="form-group">
  <label> Access Code</label>
  <input type="code" name="access"
<br>
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="submit" value="Register">
    </div>
</form>
</div>
</body>


<br>
<br>
<br>
<br>
<br>


<div class="emailing">
<form action='' method="post">
  <br>
  <label for="email">email</label>
  <input type="email" id="email" name="mail" value="">
  <br>
  <input type="submit" class="btn btn-primary" name="email" value="email">
 </div>

<br>
<br>
<br>
<br>
<br>


<div class="backtologin">
  <form action="" method="post">
    <input type="submit" name="backtologin" value="login in screen">
    </form>



</html>
