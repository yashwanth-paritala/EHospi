


<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"u153965993_usrd");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['datalogin_user'];
// SQL Query To Fetch Complete Information Of User
$qry="select * from datalogin where username='$user_check'";
$ses_sql=mysqli_query($connection,$qry);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
//header('Location: index.html'); // Redirecting To Home Page
}
?>

 