<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "bh";

$con = new mysqli($host, $user, $pass, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
