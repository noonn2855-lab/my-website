<?php
$servername = "localhost";
$username = "root";   // XAMPP default user
$password = "";       // XAMPP default password is empty
$dbname = "movie_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
