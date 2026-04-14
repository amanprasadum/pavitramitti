<?php
$host = "localhost";
$user = "u632088755_admin";
$pass = "Pavitra@123#";
$db   = "u632088755_pavitramitti";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// optional but good
$conn->set_charset("utf8mb4");
?>