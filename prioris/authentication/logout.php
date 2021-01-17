<?php
session_start();
session_destroy();
var_dump('session destroyed');
header('Location: ../authentication/login.php');
?>