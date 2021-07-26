<!DOCTYPE html>
<html lang="en">
<?php include_once('/Users/smol/fun/LoanerTracking/backend/login.php'); ?>
<head>
 <meta charset="UTF-8">
 <title>Login</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
 body{font: 14px sans-serif;}
 .wrapper{width: 360px; padding: 20px;}
 </style>
 </head>
 <?php
  #create the login object
  $login = new Login;
  if(isset($_POST['submit'])) {
   $user = $_POST['username'];
   $pass = $_POST['password'];
   $login->check_for_access($user, $pass);
  } 
  if(isset($_SESSION['username'])) {
   if((time()-$_SESSION['last_login_timestamp']) > 1) {
    session_destroy();
    header("Location:index.php");
   } else {
    header("Location:index.php");
   }
  }

  if(isset($_POST['reset'])) {
   header("Location:reset_password.php");  
  }

  if(isset($_POST['register'])) {
   header("Location:registerScreen.php");
  }
?>

<body>
<div class="wrapper">
<h2>Login</h2>
<p>Please fill in your credentials to login.</p>
<form action="" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="form-group">
<label>Password</label>
<input type= "password" name="password">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" name="submit" value="Login">
</div>

<br>
<br>

<div class="register">
<form action="" method="post">
<input type="submit" name="register" value="Register">
</form>

<br>
<br>

<div class="reset">
<form action="" method="post">
<input type="submit" name="reset" value="reset password">
</form>

</div>
</form>
</div>
</body>
</html>
