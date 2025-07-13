<?php
$host = "localhost";
$user = "root"; // default for XAMPP/WAMP
$password = "";
$dbname = "wpoets_crud";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
