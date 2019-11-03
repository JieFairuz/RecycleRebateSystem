<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin HomePage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
		<style>
				table, th, td {
				  border: 1px solid black;
				}
				div {
				  margin-right: 10px;
				  margin-left: 10px;
				  margin-bottom: 10px;
				}
		</style>
</head>

<body><div style="background-image: url('images/bg.jpg');height:645px;">
<div id="container">
	<div id="header">

		<h1>Recycle Rebate System</h1>
		<br/>
		<h1>Admin Homepage</h1>
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
		<div id="navbar">
      <center><h3><ul>
        <a href="admin_homepage.php" class="myButton">Home</a>
        <a href="admin_register_user.php"class="myButton">Regiter User</a>
      </ul></h3></center>
    </div>


		<div id="main-content">
		<h2>List of Users</h2><br/>
    <table style="width:100%">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
				<th>Address</th>
        <th>Phone Num</th>
        <th>Weight (KG)</th>
				<th>Rebate Point</th>
      </tr>
      <tr>
        <?php
						$conn = mysqli_connect("localhost", "root", "", "rebate");
							if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
								 }


						$sql = "SELECT firstname, lastname, email, address,phone_num, weight, rebate FROM users";
						$result = $conn -> query($sql);

						if($result -> num_rows > 0){
							while ($row = $result -> fetch_assoc()){
								echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone_num"] . "</td><td>" . $row["weight"] . "</td><td>" . $row["rebate"] . "</td></tr>";
							}
								echo "</table>";
						} else {
							echo "0 result";
						}
						$conn -> close();

				?>
      </tr>
    </table>
	</div>
	</div>

	<div id="footer">
		Copyright &copy; RRS
	</div>
	</div>

</body>
</html>
