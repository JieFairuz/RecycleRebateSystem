<?php
// Include config file
include("includes/dbsconnect.php");
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register User</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body><div style="background-image: url('images/bg.jpg');height:645px;">
<div id="container">
	<div id="header">

      <h1>Recycle Rebate System</h1>
  		<br/>
  		<h1>User Registration Form</h1>
  		<div id ="userinfo">
  		<?php
  		include('includes/dbsconn.php');
  		if($_SESSION["username"]) {
  		?>
  		Welcome <?php echo $_SESSION["uname"]; ?>.
  		<br>
  		Click here to <a href="logout.php" tite="Logout">Logout.
  		<?php
  		}else echo "<h1>Please login first .</h1>";
  		?>
  	</div>
  	</div>

  	<div id="main-content">
  		<div id="navbar">
        <center><ul>
          <a href="admin_homepage.php" class="myButton">Home</a>
          <a href="admin_register_user.php"class="myButton">Regiter User</a>
        </ul></center>
      </div>


 <center><form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username: </label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div><br/>
	   	<div class="input-group">
  	  <label>First Name : </label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div><br/>
	<div class="input-group">
  	  <label>Last Name: </label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div><br/>
		<div class="input-group">
		<label>Email : </label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div><br/>
<div class="input-group">
		<label>Address: </label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div><br/>
	<div class="input-group">
	<label>Phone Num : </label>
	<input type="int" name="phone" value="<?php echo $phone; ?>">
	</div><br/>
  	<div class="input-group">
  	  <label>Password: </label>
  	  <input type="password" name="password_1">
  	</div><br/>
  	<div class="input-group">
  	  <label>Confirm password : </label>
  	  <input type="password" name="password_2">
   </div><br/>

  	<div class="input-group">
  	  <center><button type="submit" class="btn" name="admin">Register</button></center>
  	</div><br/>


			<div id="footer">
				Copyright &copy; RRS
			</div>
  </div>
</form></center>
</body>
</html>
