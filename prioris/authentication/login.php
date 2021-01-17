<?php
session_start();
if(isset($_GET['message'])){
    echo $_GET['message'];
}
if (array_key_exists ( 'loggedin', $_SESSION ) && $_SESSION['loggedin'] == true)
{
    header('Location: ../protected/protected.php?message'.urlencode("You are alredy logged in!"));
}
?>
<form action="../authentication/loginProcessor.php" method="POST">
    <h1>Login</h1>
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
    <br />
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br />
    <button type="submit" class="loginbtn">Login</button>

    <p>Don't have an account? <a href="../authentication/registrationPage.php">Sign up</a>.</p>
</form>
<a href="../public/public.php">Public page</a>