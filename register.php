<?php
session_start();
if (isset($_SESSION['email']))
    header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Inc-Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container rounded text-center">
        <h1 class="text-center">Sign <span style="font-weight: 600;">Up</span></h1>
        <form action="signup.php" method="post">
            <div class="row justify-content-center">
                <div class="form-floating mb-3 col-4">
                    <input required type="text" class="form-control" id="name" placeholder="Name" name="first">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating col-4">
                    <input required type="text" class="form-control" id="surname" placeholder="Surname" name="last">
                    <label for="surname">Surname</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-floating mb-3 col-4">
                    <input required type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating col-4">
                    <input required type="password" class="form-control" id="paswd" placeholder="Password" name="password">
                    <label for="paswd">Password</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-floating col-8">
                    <textarea required class="form-control" placeholder="Address" id="address" name="address"></textarea>
                    <label for="address">Address</label>
                </div>
            </div>

            <input type="submit" id="submit-btn" class="my-4 rounded" style="font-size: larger" value="Sign Up">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>