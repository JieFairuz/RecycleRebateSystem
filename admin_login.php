<?php
include('includes/dbsconn.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<div style="background-image: url('images/bg.jpg');height:600px;">
  <div class="header">
  	<h1>Welcome To</h1>
			<h1>Recycle Rebate System</h1>
		<br/>
	 <h2>Admin Login Page</h2>
  </div>

	 <form name="frmUser" method="post" action="" align="center">
  <div class="message"><?php if($message!="") { echo $message; } ?></div>
  <form method="post" action="admin_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="uname" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="pwd">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="admin">Login</button>
  	</div>
  </form>
</body>
</html>
