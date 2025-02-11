<?php 

$server = "localhost";
$users = "root";
$pass = "";
$database = "login_system";

$conn = mysqli_connect($server, $users, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>