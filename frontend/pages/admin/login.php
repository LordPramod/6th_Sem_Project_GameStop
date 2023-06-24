<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamestop</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/admin-css/admin-login.css?v=1">
</head>

<body>
    <div class="main-container">
        <div class="form-main">
            <div class="heading">
                <h1>Admin Login Panel</h1>
            </div>
            <form action="login.php" method="post">
                <div class="form-container mb-3 ">
                    <label for="email">Email: </label><br>
                    <!-- <input class="text-center " type="email" name="email" id="email" size="40"><br> -->
                    <input type="email" name="email" placeholder="Enter Your Email" id="email" size="40" class=" ">

                </div>
                <div class="form-container mb-3">

                    <label for="Password">Password: </label><br>
                    <input type="password" name="pass" id="Password" size="40"><br>

                </div>
                <input class="checkbox" type="checkbox" name="remember" id=""> <span>Remember me</span><br>

                <div class="btn-container mb-3">
                    <input type="submit" value="Login" name="login">

                </div>

                <?php
                if (isset($_POST['login'])) {
                    include "/xampp/htdocs/GameStop/backend/config/connection.php";
                    error_reporting(0);
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $query = "SELECT * FROM admin_login where  email = '$email' and password = '$pass'  limit 1";
                    $response = mysqli_query($connect, $query);
                    $query2 = "SELECT * From admin_login";
                    $response2 = mysqli_query($connect, $query2);
                    if ($row = mysqli_fetch_assoc($response2)) {
                        $db_email = $row['email'];
                        if ($email == $db_email) {
                            $name = $row['name'];
                        }
                    }
                    if (mysqli_fetch_row($response) > 0) {
                        session_start();
                        $_SESSION['username'] = $name;
                        header("location:../../pages/admin/dashboard.php");
                    } else {
                        echo "<script> alert('Username Password Does.n't matched'); </script>";
                    }
                } ?>

            </form>
        </div>
    </div>
</body>

</html>