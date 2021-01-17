<?php
session_start();
include('../database/dbconnection.php');


$loadUserSql = "SELECT username, password FROM users WHERE username='$_POST[username]'";
$retval = mysqli_query($conn, $loadUserSql);
$row = mysqli_fetch_array($retval, MYSQL_ASSOC);

if(password_verify($_POST['password'], $row['password'])) {
    $_SESSION['user'] = $row['username'];
    $_SESSION['Id'] = $row['Id'];
    $_SESSION['loggedin'] = true;

    header('Location: ../protected/protected.php');
} 
else{
    header('Location: ../authentication/login.php?message='.urlencode("Invalid username or password!"));
}
?>