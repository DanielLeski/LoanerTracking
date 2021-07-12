<!DOCTYPE html>
<html lang="en">
<?php 
    include_once('/home/administrator/LoanerTracking/reset_password_code.php');
    include_once('/home/administrator/LoanerTracking/register.php');
    include_once('/home/administrator/LoanerTracking/mailer.php');
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
  if(isset($_POST['submit'])) {
     $user = $_POST['username'];
     $ps = $_POST['password'];
     $code = $_POST['access'];
     reset_password($user, $ps, $code);
     header("Location:index.php");  
  }

  if(isset($_POST['code'])) {
    $email = $_POST['mail'];
    echo emailing_access_code($email);
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


<div class="emailing">
<form action='' method="POST">
  <br>
  <label for="email">Email</label>
  <input type="email" id="email" name="mail" value="">
  <br>
  <input type="submit" class="btn btn-primary" name="code" value="email">
 </div>


