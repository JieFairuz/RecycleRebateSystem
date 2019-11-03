<?php
// Include config file
session_start();
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HomePage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
<style>
				div.gallery {
				  margin: 5px;
				  border: 1px solid #ccc;
				  float: left;
				  width: 180px;
				}

				div.gallery:hover {
				  border: 1px solid #777;
				}

				div.gallery img {
				  width: 100%;
				  height: auto;
				}

				div.desc {
				  padding: 15px;
				  text-align: center;
				}
</style>
</head>

<body>
	<div style="background-image: url('images/bg.jpg');height:640px;">
<div id="container">
	<div id="header">


		<h1>Recycle Rebate System</h1>
		<br/>
	<h1>Homepage</h1>
		<div id ="userinfo">
		<?php
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

		<table width = "100%" border = "0">
	          <tr valign = "top">
	             <td bgcolor = "#eee" width = "120" height = "200">
								 <div class="gallery">
										  <a target="_blank">
										    <img src="images/01.jpg" alt="Cinque Terre" width="600" height="400">
										  </a>
										  <div class="desc">Redeem here!</div>
										</div>

										<div class="gallery">
										  <a target="_blank">
										    <img src="images/02.jpg" alt="Forest" width="600" height="400">
										  </a>
										  <div class="desc">Redeem here!</div>
										</div>

										<div class="gallery">
										  <a target="_blank">
										    <img src="images/03.jpg" alt="Northern Lights" width="600" height="400">
										  </a>
										  <div class="desc">Redeem here!</div>
										</div>

										<div class="gallery">
										  <a target="_blank">
										    <img src="images/04.jpg" alt="Mountains" width="600" height="400">
										  </a>
										  <div class="desc">Redeem here!</div>
										</div>

										<div class="gallery">
										  <a target="_blank">
										    <img src="images/05.jpg" alt="Northern Lights" width="600" height="400">
										  </a>
										  <div class="desc">Redeem here!</div>
										</div>

										<div class="gallery">
										  <a target="_blank">
										    <img src="images/06.jpg" alt="Mountains" width="600" height="400">
										  </a>
										  <div class="desc">Redeem here!</div>
										</div>
	             </td>

	             <td bgcolor = "#aaa" width = "100">
								<h4><br/>	Username :  <?php echo $_SESSION["username"]; ?></h4>
 						 		<h4><br/>	Firstname :  <?php echo $_SESSION["firstname"]; ?></h4>
 						 		<h4><br/>	Lastname :  <?php echo $_SESSION["lastname"]; ?></h4>
 						 		<h4><br/>	Email     :  <?php echo $_SESSION["email"]; ?></h4>
 						 		<h4><br/>	Rebate Point   :  <?php echo $_SESSION["rebate"]; ?></h4>
	             </td>
	          </tr>
	       </table>
				 <div id="footer">
				 	Copyright &copy; RRS
				 </div>
</body>
</html>
