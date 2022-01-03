<?php
$conn = new mysqli("localhost", "root", "", "sigma");


if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sdf = $_POST['email'];
$password = $_POST['password'];
?>