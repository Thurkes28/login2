<?php
$dbserver = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";

$mysqli = new mysqli($dbserver, $username, $password, $dbname);
if ($mysqli->connect_errno)
{
echo "Failed to connect to MYSQL: " . $mysqli->connect_error;
exit();
}
