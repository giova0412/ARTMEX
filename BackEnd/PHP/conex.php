<?php
$servername = "localhost";
$username = "root"; 
$password = "1234"; 
$dbname = "art_mex";
$port = "3306";


$conn = new mysqli_query ($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>