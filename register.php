<?php
// Include config file
include("includes/dbsconnect.php");
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<div style="background-image: url('images/bg.jpg');height:600px;">
	  <div class="header">
	<h1>Registration Form</h1>
	<p>Please fill this form to create an account.</p>
  </div>

 <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	   	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
		<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>
<div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="input-group">
	<label>Phone Num</label>
	<input type="int" name="phone" value="<?php echo $phone; ?>">
	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
   </div>

  	<div class="input-group">
  	  <center><button type="submit" class="btn" name="users">Register</button></center>
  	</div>

  	<center><p>Already a member? <a href="login.php">Sign in</a></center>
  	</p>
</form>
</body>
</html>
