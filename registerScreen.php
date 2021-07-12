<!DOCTYPE html>

<html lang="en">
<?php
  include('/Users/smol/fun/PHP_CB/register.php');  
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
       if(isset($_POST['code'])) {
        $user = $_POST['mail'];
        emailing_access_code($user);
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
<form action='' method="POST">
  <br>
  <label for="email">Email</label>
  <input type="email" id="email" name="mail" value="">
  <br>
  <input type="submit" class="btn btn-primary" name="code" value="email">
 </div>


</html>
