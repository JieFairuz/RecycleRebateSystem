<?php

session_start();

// initializing variables
$username = "";
//$password = "";
$firstname ="";
$lastname ="";
$email ="";
$address ="";
$phone = "";
$message = "";
$errors = array();

if(count($_POST)>0) {

/* Attempt to connect to MySQL database */
    $conn = mysqli_connect("localhost", "root", "", "rebate");
        if(!$conn){
            die("connection error");
         }
//connect database to users
$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "' AND firstname='" . $_POST["firstname"] . "' AND lastname='" . $_POST["lastname"] . "' AND email='" . $_POST["email"] . "' AND rebate ='" . $_POST["rebate"] . "' ");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row['username'];
$_SESSION["password"] = $row['password'];
$_SESSION["firstname"] = $row['firstname'];
$_SESSION["lastname"] = $row['lastname'];
$_SESSION["email"] = $row['email'];
$_SESSION["rebate"] = $row['rebate'];
} else {
$message = "Invalid Username or Password!";
}



// REGISTER USER
if (isset($_POST['users'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "First Name is empty"); }
  if (empty($lastname)) { array_push($errors, "Last Name is empty"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Address is empty"); }
  if (empty($phone)) { array_push($errors, "Phone No is empty"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, firstname, lastname, password, email, address, phone_num)
  			  VALUES('$username', '$firstname', '$lastname',  '$password', '$email', '$address',  '$phone')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now registered!";
  	header('location: login.php');
  }
}


// LOGIN USER
if (isset($_POST['user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homepage.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

}

?>
