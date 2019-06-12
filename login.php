<?php
session_start(); // Starting Session

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$dbconnect = mysqli_connect("localhost", "course_user", "0mROyfiLwC6CaGII");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);


// Selecting Database
$db = mysqli_select_db($dbconnect,"course");

// SQL query to fetch information of registerd users and finds user match.
$query = "select * from users where password ='$password' AND username ='$username'";
$result = mysqli_query($dbconnect, $query);

$rows = mysqli_num_rows($result);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
//mysql_close($dbconnect); // Closing Connection
header('Location: home.php');

?>