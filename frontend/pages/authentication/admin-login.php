<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamestop</title>
    <link rel="stylesheet" href="../../assets/css/admin-login.css">
</head>

<body>
    <div class="main-container">
        <div class="form-control">
            <div class="heading">
                <h1>Admin Login Panel</h1>
            </div>
            <form action="admin-login.php" method="post">
                <div class="form-container">
                    <label for="uname">Username: </label><br>
                    <input type="text" name="uname" id="" size="40"><br>
                </div>
                <div class="form-container">
                    <label for="email">Email: </label><br>
                    <input type="email" name="email" id="" size="40"><br>

                </div>
                <div class="form-container">

                    <label for="Password">Password: </label><br>
                    <input type="password" name="pass" id="" size="40"><br>
                    <input class="checkbox" type="checkbox" name="remember" id=""> <span>Remember me</span><br>

                    <div class="btn-container">
                        <input type="submit" value="Login" name="login">

                    </div>
                </div>

                <?php
                if (isset($_POST['login'])) {
                    include "/xampp/htdocs/GameStop/backend/config/connection.php";
                    error_reporting(0);
                    $name = $_POST['uname'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $query = "SELECT * FROM admin_login where name = '$name' and email = '$email' and password = '$pass'  limit 1";
                    $response = mysqli_query($connect, $query);
                    if (mysqli_fetch_row($response) > 0) {
                        session_start();
                        $_SESSION['username'] = "$name";
                        header("location:../dashboard.php");
                    } else {
                        echo "<script> alert('Username Password Doesn matched'); </script>";
                    }
                } ?>

            </form>
        </div>
    </div>
</body>

</html>