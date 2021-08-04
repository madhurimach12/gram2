<?php 
$servername = "localhost";
$username = "mg";
$password = "mg";
$database = "ajarapura";


global $conn;
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>