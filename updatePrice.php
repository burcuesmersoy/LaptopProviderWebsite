<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigma";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$storage_name = $_POST['storage'];
$ram_name = $_POST['ram'];
$cpu_name = $_POST['cpu'];
$gpu_name = $_POST['gpu'];
$display_name = $_POST['display'];
$os_name = $_POST['os'];

$result = mysqli_query($conn, "SELECT price FROM storage WHERE storage.component_name='$storage_name'");
$storage_price = mysqli_fetch_assoc($result)['price'];
$result = mysqli_query($conn, "SELECT price FROM ram WHERE ram.component_name='$ram_name'");
$ram_price = mysqli_fetch_assoc($result)['price'];
$result = mysqli_query($conn, "SELECT price FROM cpu WHERE cpu.component_name='$cpu_name'");
$cpu_price = mysqli_fetch_assoc($result)['price'];
$result = mysqli_query($conn, "SELECT price FROM gpu WHERE gpu.component_name='$gpu_name'");
$gpu_price = mysqli_fetch_assoc($result)['price'];
$result = mysqli_query($conn, "SELECT price FROM display WHERE display.component_name='$display_name'");
$display_price = mysqli_fetch_assoc($result)['price'];
$result = mysqli_query($conn, "SELECT price FROM os WHERE os.component_name='$os_name'");
$os_price = mysqli_fetch_assoc($result)['price'];

$total_price = $storage_price + $cpu_price + $gpu_price + $ram_price + $display_price + $os_price + 5000;
echo $total_price;