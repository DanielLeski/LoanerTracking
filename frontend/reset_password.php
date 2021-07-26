<!DOCTYPE html>
<html lang="en">
<?php
 include_once('/Users/smol/fun/LoanerTracking/backend/reset_password_code.php');
 include_once('/Users/smol/fun/LoanerTracking/backend/register.php');
 include_once('/Users/smol/fun/LoanerTracking/backend/mailer.php');
?>

<head>
<meta charset="UTF-8">
<title>Reset Password</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body{font: 14px sans-serif;}
.wrapper{width: 360px; padding: 20px;}
</style>
</head>

<?php
 #Creating a reset password object
 $reset = new reset_password;
 $m = new mailer;
 if(isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];
  $code = $_POST['code'];
  $reset->reset_password($user, $password, $code);
  header("Location:index.php");
 }

 if(isset($_POST['email'])) {
  $user = $_POST['mail'];
  $m->send_email_acceess_code($user);
 }

 if(isset($_POST['backtologin'])) {
  header("Location:index.php");
 }

?>


<body>
<div class="wrapper">
<h2>Reset Password</h2>
<p>Please fill in your credentials to login.</p>
<form action="" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="form-group">
<label>Password</label>
<input type= "text" name="password">
</div>
<div class="form-group">
<label>Access Code</label>
<input type="text" name="access";
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" name="submit" value="Reset">
</div>

<br>
<br>
<br>

<div class="emailing">
<form action='' method="post">
<br>
<label for="email">email</label>
<input type="email" id="email" name="mail" value="">
<br>
<input type="submit" class="btn btn-primary" name="email" value="Email">
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

