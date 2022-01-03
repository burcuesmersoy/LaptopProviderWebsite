<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Inc-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">cpuID</th>
                <th scope="col">Component Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Manufacturer ID</th>
                <th scope="col">Clock Speed</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sigma";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("connection failed: " . $conn->connect_error);
            }

            $getOrders = "SELECT * FROM `cpu` ORDER BY `cpuID`";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
                $cpuID = $row['cpuID'];
                $componentName = $row['component_name'];
                $price = $row['price'];
                $stock = $row['stock'];
                $manufacturerID = $row['manufacturerID'];
                $clockSpeed = $row['clock_speed'];
                echo '
              <tr>
              <td>' . $cpuID . '</td>
              <td>' . $componentName . '</td>
              <td>' . $price . '</td>
              <td>' . $stock . '</td>
              <td>' . $manufacturerID . '</td>
              <td>' . $clockSpeed . '</td>
            </tr>
              ';
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>