<?php
$servername = "";
$username = ""; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
