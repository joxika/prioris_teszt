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
<form action="../authentication/registrationProcessor.php" method="POST">
    <h1>Registration</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br />
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br />
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Confrim Password" name="password_confirm" required>
    <br />
    <button type="submit" >Register</button>
    <p>Already have an account? <a href="../authentication/login.php">Sign in</a>.</p>        
</form>
<a href="../public/public.php">Public page</a>
