<?php
if ($_POST['password'] != $_POST['password_confirm']) {
    header('Location: ../authentication/registrationPage.php?message='.urlencode("Password and confrim password has to match!"));
    die();
}
include('../database/dbconnection.php');

$loadUserSql = "SELECT username FROM users WHERE username='$_POST[username]'";
$retval = mysqli_query($conn, $loadUserSql);
$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
$userExists = mysqli_num_rows($retval) == 1;

if($userExists){
    header('Location: ../authentication/registrationPage.php?message=Username%20taken!');
}
else{  
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $saveUserSql = "INSERT INTO users (username, password) VALUES ('".$_POST['username']."','". $hashed_password."')";
}

if (mysqli_query($conn, $saveUserSql)) {
    header('Location: ../authentication/login.php?message='.urlencode("Succesful registration!"));
    } 
    else {
        echo "Error: " . $saveUserSql . "<br>" . mysqli_error($conn);
    }
?>