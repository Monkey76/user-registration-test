<?php 
$servername = "localhost";
$username = "thorndy";
$password = "Sara1976";
$dbname = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>