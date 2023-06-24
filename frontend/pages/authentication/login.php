<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- linking css for styling -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css?v=1">
</head>

<body>
    <div class="left">

    </div>
    <div class="right">

        <div class="form-body">
            <h1 class="heading">Login</h1>
            <p class="login-page">Welcome to Login.</p>

            <form action="login.php" method="post">
                <div class="form-div">
                    <label for="email">Email </label><br>
                    <input type="email" name="email" placeholder="Email address" size="50vh" autocomplete="new-password"
                        class="form-contol"><br>

                    <div class="form-div">
                        <label for="password">Password </label><br>
                        <input type="password" name="password" size="50vh" placeholder="Password"
                            class="form-contol"><br>
                    </div>
                    <div class="form-group mt-1">
                        <select name="usertype" class="form-select" id="usertype">
                            <option value="user" class="bg-primary">User</option>
                            <option value="admin" class="bg-primary">Admin</option>
                        </select>
                    </div>

                    <div class="loggedin">
                        <input type="checkbox" name="remember" id=""><span>Keep me logged in</span><br>
                    </div>
                    <div class="validate">
                        <?php
                        include '/xampp/htdocs/GameStop/backend/config/connection.php';
                        if (isset($_POST['confirm'])) {
                            $email = $_POST['email'];
                            $pass = $_POST['password'];
                            $usertype = $_POST['usertype'];
                            $sql = "SELECT * FROM user_info where email = '$email' and password = '$pass' and usertype = '$usertype'";
                            $query = "SELECT * FROM user_info";
                            $response2 = mysqli_query($connect, $query);
                            $response = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_assoc($response2)) {
                                $db_email = $row['email'];
                                if ($email == $db_email) {
                                    $name = $row['name'];
                                }
                            }
                            if (mysqli_fetch_row($response) > 0 && $_POST['usertype'] == "user") {
                                session_start();
                                $_SESSION['name'] = $name;
                                header('location:../index.php');
                            }
                            elseif (mysqli_fetch_row($response) > 0 && $_POST['usertype'] == "admin") {
                                session_start();
                                $_SESSION['name'] = $name;
                                header("location:../admin/dashboard.php");
                            } else {
                                // echo 'Username and password doesnot matched';
                                echo "<script> alert('Username Password Doesn matched'); </script>";
                            }
                        } ?>
                    </div>
                    <div class="btn-login">
                        <input type="submit" value="Login" name="confirm" size="20vh">
                    </div>
                    <div class="forgot">
                        <span><a href="#">Forgot password?</a></span>
                    </div>

                </div>
            </form>
        </div>
    </div>



</body>

</html>