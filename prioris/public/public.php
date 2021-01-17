<?php
session_start();
echo "<h2> this is a public page</h2>";
if (array_key_exists ( 'loggedin', $_SESSION ) && $_SESSION['loggedin'] == true)
{
    ?>
    <p>you are logged in as <?php $_SESSION['user'] ?></p>
    <br>
    <a href='../protected/protected.php'>Protected Page</a>
    <br>
    <a href='../authentication/logout.php'>Logout</a>
    <?php
}
else{
    ?>
    <p>you are not logged in</p>
    <br>
    <a href='../authentication/login.php'>Login</a>
    <br>".
    <a href='../authentication/registrationPage.php'>Register</a>
    <?php
}
?>



