<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div style="background-image: url('images/bg.jpg');height:645px;">
<div id="container">
	<div id="header">

		<h1>Recycle Rebate System</h1>
<br/>
<h1>About</h1>
		<div id ="userinfo">
		<?php
		include('includes/dbsconnect.php');
		if($_SESSION["username"]) {
		?>
		Welcome <?php echo $_SESSION["username"]; ?>.
		<br>
		Click here to <a href="logout.php" tite="Logout">Logout.
		<?php
		}else echo "<h1>Please login first .</h1>";
		?>
	</div>
	</div>

	<div id="main-content">
		<center><div id="navbar">
			<h3><ul>
				<a href="homepage.php" class="myButton">Home</a>
				<a href="about.php"class="myButton">About</a>
				<a href="FAQ.php"class="myButton">FAQ</a>
				<a href="contact.php"class="myButton">Contact Us</a>
			</ul></h3>
		</div></center>


		<div id="main">
		<h2>Information</h2>
			<p>Recycle Rebate System is a platform that gives out rebate points</p>
			<p>to the user of the system upon recycling or throwing out their trash to the nearby recycling centre.</p>
			<img src="images/05.jpg" alt="Northern Lights" width="500" height="245">
		</div>
	</div>

	<div id="footer">
		Copyright &copy; RRS
	</div>
	</div>

</body>
</html>
