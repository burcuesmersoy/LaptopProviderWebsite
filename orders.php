<?php
session_start();
if (!($_SESSION['email'] == 'admin@gmail.com'))
    header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Inc-Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">orderID</th>
                <th scope="col">Insurance Period</th>
                <th scope="col">Date</th>
                <th scope="col">LaptopID</th>
                <th scope="col">UserID</th>
                <th scope="col">CPU Price</th>
                <th scope="col">GPU Price</th>
                <th scope="col">RAM Price</th>
                <th scope="col">Storage Price</th>
                <th scope="col">Display Price</th>
                <th scope="col">OS Price</th>
                <th scope="col">Total Price</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "sigma");

            if ($conn->connect_error) {
                die("connection failed: " . $conn->connect_error);
            }

            $getOrders = "SELECT * FROM `invoice` ORDER BY `orderID`";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
                $orderID = $row['orderID'];
                $insurance = $row['insurance_period'];
                $date = $row['date'];
                $laptopID = $row['laptopID'];
                $userID = $row['userID'];
                $cpu = $row['cpu_price'];
                $gpu = $row['gpu_price'];
                $ram = $row['ram_price'];
                $storage = $row['storage_price'];
                $display = $row['display_price'];
                $os = $row['os_price'];
                $total = $row['total_price'];
                echo '
              <tr>
              <td>' . $orderID . '</td>
              <td>' . $insurance . '</td>
              <td>' . $date . '</td>
              <td>' . $laptopID . '</td>
              <td>' . $userID . '</td>
              <td>' . $cpu . '</td>
              <td>' . $gpu . '</td>
              <td>' . $ram . '</td> 
              <td>' . $storage . '</td>
              <td>' . $display . '</td>
              <td>' . $os . '</td>
              <td>' . $total . '</td>
            </tr>
              ';
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>