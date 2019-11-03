<?php

//session_start();

// initializing variables
$uname = "";
$pwd = "";
$errors = array();
$message = "";

if(count($_POST)>0) {

/* Attempt to connect to MySQL database */
    $conn = mysqli_connect("localhost", "root", "", "rebate");
        if(!$conn){
            die("connection error");
         }

//connect database to admin_login
$adm = mysqli_query($conn,"SELECT * FROM admin WHERE uname='" . $_POST["uname"] . "' AND pwd = '" . $_POST["pwd"] . "' ");
$colm  = mysqli_fetch_array($adm);
if(is_array($colm)) {
$_SESSION["uname"] = $colm['uname'];
$_SESSION["pwd"] = $colm['pwd'];
} else {
$message = "Invalid Username or Password!";
}



// LOGIN ADMIN
if (isset($_POST['admin'])) {
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  if (empty($uname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($pwd)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM addmin WHERE uname='$uname' AND pwd='$pwd'";
  	$adm = mysqli_query($conn, $query);

  	  $_SESSION['uname'] = $uname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: admin_homepage.php');
  	}
  }}
  ?>
