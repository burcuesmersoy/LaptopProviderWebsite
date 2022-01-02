<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigma";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$stock = $_POST['stock'];
$price = $_POST['price'];
$itemName = $_POST['itemName'];
$id = $_POST['id'];

echo $stock;
echo $price;
echo $itemName;
echo $id;

$itemID = $itemName;
$itemID .= "ID";

if($stock!="default" && $price=="default"){
    $sql = "UPDATE $itemName SET `stock`='$stock' WHERE $itemID='$id'";
    $conn->query($sql);
}
elseif ($stock=="default" && $price!="default") {
    $sql = "UPDATE $itemName SET `price`='$price' WHERE $itemID='$id'";
    $conn->query($sql);

}
elseif ($stock!="default" && $price!="default") {
    $sql1 = "UPDATE $itemName SET `price`='$price' WHERE $itemID='$id'";
    $sql2 = "UPDATE $itemName SET `stock`='$stock' WHERE $itemID='$id'";
    $conn->query($sql1);
    $conn->query($sql2);
}
else {
    echo 'yazacagin kodu';
}
