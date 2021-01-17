<?php
$config = parse_ini_file('../local.config.ini');

$database_servername = $config['database_servername'];
$database_username = $config['database_username'];
$database_password = $config['database_password'];
$database_name = $config['database_name'];

$conn = new mysqli($database_servername, $database_username, $database_password, $database_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>