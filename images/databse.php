<?php
$host = "localhost";
$user = "root"; // Change if needed
$pass = "trisha123"; // Change if needed
$dbname = "subscribers"; // Change this

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
