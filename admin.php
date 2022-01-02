<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled">Disabled</a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col">

        <p class="text-center">
          CPUs
        </p>


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
      </div>
      <div class="col">
        <p class="text-center">
          Displays
        </p>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">displayID</th>
              <th scope="col">Component Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Manufacturer ID</th>
              <th scope="col">Refresh Rate</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $getOrders = "SELECT * FROM `display` ORDER BY `displayID`  ";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
              $displayID = $row['displayID'];
              $componentName = $row['component_name'];
              $price = $row['price'];
              $stock = $row['stock'];
              $manufacturerID = $row['manufacturerID'];
              $refreshRate = $row['refresh_rate'];
              echo '
              <tr>
              <td>' . $displayID . '</td>
              <td>' . $componentName . '</td>
              <td>' . $price . '</td>
              <td>' . $stock . '</td>
              <td>' . $manufacturerID . '</td>
              <td>' . $refreshRate . '</td>
            </tr>
              ';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-center">
          GPUs
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">gpuID</th>
              <th scope="col">Component Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Manufacturer ID</th>
              <th scope="col">VRAM Size</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $getOrders = "SELECT * FROM `gpu` ORDER BY `gpuID`  ";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
              $gpuID = $row['gpuID'];
              $componentName = $row['component_name'];
              $price = $row['price'];
              $stock = $row['stock'];
              $manufacturerID = $row['manufacturerID'];
              $vram = $row['vram_size'];
              echo '
              <tr>
              <td>' . $gpuID . '</td>
              <td>' . $componentName . '</td>
              <td>' . $price . '</td>
              <td>' . $stock . '</td>
              <td>' . $manufacturerID . '</td>
              <td>' . $vram . '</td>
            </tr>
              ';
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <p class="text-center">
          OS
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">osID</th>
              <th scope="col">Component Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Manufacturer ID</th>
              <th scope="col">Version</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $getOrders = "SELECT * FROM `os` ORDER BY `osID`  ";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
              $osID = $row['osID'];
              $componentName = $row['component_name'];
              $price = $row['price'];
              $stock = $row['stock'];
              $manufacturerID = $row['manufacturerID'];
              $version = $row['version'];
              echo '
              <tr>
              <td>' . $osID . '</td>
              <td>' . $componentName . '</td>
              <td>' . $price . '</td>
              <td>' . $stock . '</td>
              <td>' . $manufacturerID . '</td>
              <td>' . $version . '</td>
            </tr>
              ';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-center">
          RAMs
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ramID</th>
              <th scope="col">Component Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Manufacturer ID</th>
              <th scope="col">Size</th>

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

            $getOrders = "SELECT * FROM `ram` ORDER BY `ramID`  ";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
              $ramID = $row['ramID'];
              $componentName = $row['component_name'];
              $price = $row['price'];
              $stock = $row['stock'];
              $manufacturerID = $row['manufacturerID'];
              $size = $row['size'];
              echo '
              <tr>
              <td>' . $ramID . '</td>
              <td>' . $componentName . '</td>
              <td>' . $price . '</td>
              <td>' . $stock . '</td>
              <td>' . $manufacturerID . '</td>
              <td>' . $size . '</td>
            </tr>
              ';
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <p class="text-center">
          Storages
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">StorageID</th>
              <th scope="col">Component Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Manufacturer ID</th>
              <th scope="col">Capacity</th>

            </tr>
          </thead>
          <tbody>

            <?php
            $getOrders = "SELECT * FROM `storage` ORDER BY `storageID` ASC";
            $result = mysqli_query($conn, $getOrders);
            while ($row = mysqli_fetch_assoc($result)) {
              $storageID = $row['storageID'];
              $componentName = $row['component_name'];
              $price = $row['price'];
              $stock = $row['stock'];
              $manufacturerID = $row['manufacturerID'];
              $capacity = $row['capacity'];
              echo '
              <tr>
              <td>' . $storageID . '</td>
              <td>' . $componentName . '</td>
              <td>' . $price . '</td>
              <td>' . $stock . '</td>
              <td>' . $manufacturerID . '</td>
              <td>' . $capacity . '</td>
            </tr>
              ';
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <p class="text-center">
        Laptops
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">LaptopID</th>
            <th scope="col">is_pre_made</th>
            <th scope="col">gpuID</th>
            <th scope="col">cpuID</th>
            <th scope="col">ramID</th>
            <th scope="col">storageID</th>
            <th scope="col">displayID</th>
            <th scope="col">osID</th>
            <th scope="col">name</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $getOrders = "SELECT * FROM `laptop` ORDER BY `laptopID`  ";
          $result = mysqli_query($conn, $getOrders);
          while ($row = mysqli_fetch_assoc($result)) {
            $laptopID = $row['laptopID'];
            $ispre = $row['is_pre_made'];
            $gpuID = $row['gpuID'];
            $cpuID = $row['cpuID'];
            $ramID = $row['ramID'];
            $storageID = $row['storageID'];
            $displayID = $row['displayID'];
            $osID = $row['osID'];
            $name = $row['name'];
            echo '
            <tr>
            <td>' . $laptopID . '</td>
            <td>' . $ispre . '</td>
            <td>' . $gpuID . '</td>
            <td>' . $cpuID . '</td>
            <td>' . $ramID . '</td>
            <td>' . $storageID . '</td>
            <td>' . $displayID . '</td>
            <td>' . $osID . '</td>
            <td>' . $name . '</td>
          </tr>
            ';
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="container rounded p-4 text-center">
        <h2>Add New Item</h2>
        <form action="addItem.php" method="post">
          <div class="row justify-content-center">
            <div class="col-4">
              <select class="form-select mb-4" aria-label="Default select example" name="itemName">
                <option selected>Select the item you want to add</option>
                <option value="cpu" name="cpu">CPU</option>
                <option value="gpu" name="gpu">GPU</option>
                <option value="ram" name="ram">RAM</option>
                <option value="storage" name="storage">Storage</option>
                <option value="display" name="display">Display</option>
                <option value="os" name="os">OS</option>
              </select>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="form-floating mb-3 col-4">
              <input type="text" class="form-control" id="cName" placeholder="Component Name" name="ComponentName">
              <label for="cName">Component Name</label>
            </div>

            <div class="form-floating col-4">
              <input type="text" class="form-control" id="price" placeholder="Price" name="price">
              <label for="price">Price</label>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="form-floating mb-3 col-4">
              <input type="text" class="form-control" id="manf" placeholder="Manufacturer ID" name="mid">
              <label for="manf">ManufacturerID</label>
            </div>

            <div class="form-floating col-4">
              <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock">
              <label for="stock">Stock</label>
            </div>

            <div class="form-floating col-4">
              <input type="number" class="form-control" id="attr" placeholder="Attribute" name="attr">
              <label for="attr">Attribute</label>
            </div>
          </div>
          <button class="btn btn-lg btn-outline-black" type="submit">Add Item</button>
        </form>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
