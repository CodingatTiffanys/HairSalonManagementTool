<?php
require_once("config.php");

$debugging = $_POST['debugging'];
$function = $_POST['function'];
$results = array();

if($debugging == "true"){
  sleep(3);
}
 
register();

function register(){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$function = $_POST['function'];
$results = array();


  $sql = "INSERT INTO users (first_name, last_name, email, username, password)" . " values('$first_name', '$last_name', '$email', '$username', '$password')";
  mysqli_query($sql);
  mysqli_stmt_bind_param($stmt, $username, $password, $first_name, $last_name, $email);
  mysqli_stmt_execute($stmt);

  if(mysqli_stmt_affected_rows($stmt)==1){
    $results["results"] = "true";
  } else {
    $results["results"] = "true";
  }
  mysqli_stmt_close($stmt);

  echo json_encode($results);

}

  header("location: loginForm.php"); // Redirecting To Other Page


?>