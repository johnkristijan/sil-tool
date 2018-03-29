<?php
$servername = "localhost";
$username = "jkdataco_ninja";
$password = "1Yb40nE4nc";
$dbname = "jkdataco_siltool";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>