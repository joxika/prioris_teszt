<?php
session_start();
if (array_key_exists ( 'loggedin', $_SESSION ) === false || (array_key_exists ( 'loggedin', $_SESSION ) && $_SESSION['loggedin'] != true))
{
    header('Location: ../authentication/login.php?message='.urlencode("You have to log in first!"));
}
if(isset($_GET['message'])){
    echo $_GET['message'];
}
echo "<h2> this is a protected page</h2>";
echo "you are logged in as ".$_SESSION['user'];

?>
<br>
<a href="../public/public.php">Public page</a>
<br>
<a href="../authentication/logout.php">Logout</a>
