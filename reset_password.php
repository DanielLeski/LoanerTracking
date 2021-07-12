<!DOCTYPE html>
<html lang="en">
<?php include_once('/Users/smol/fun/PHP_CB/reset_password.php') ?>
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
     reset_password($user, $ps);
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
  <input type= "password" name="password">
  </div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="submit" value="Reset">
    </div>


