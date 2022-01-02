<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigma";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$cpuID = $_POST['cpuID'];
$gpuID = $_POST['gpuID'];
$osID = $_POST['osID'];
$ramID = $_POST['ramID'];
$storageID = $_POST['storageID'];
$displayID = $_POST['displayID'];
$ispre = 1;

echo 

$sql = "INSERT INTO `laptop` (`is_pre_made`, `gpuID`, `cpuID`, `ramID`, `storageID`, `displayID`, `osID`, `name`) VALUES ('$ispre','$gpuID', '$cpuID', '$ramID', '$storageID', '$displayID', '$osID', '$name')";

if ($conn->query($sql) === TRUE) {
    echo 'Inserted';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
