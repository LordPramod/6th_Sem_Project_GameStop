<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- linking css for styling -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                        class="form-contol" required><br>

                    <div class="form-div">
                        <label for="password">Password </label><br>
                        <input type="password" name="password" size="50vh" placeholder="Password" class="form-contol"
                            required><br>
                    </div>
                    <div class="form-group mt-1">
                        <select name="usertype" class="form-select" id="usertype">
                            <option value="user" class="bg-primary">User</option>
                            <option value="admin" class="bg-primary">Admin</option>
                        </select>
                    </div>

                    <div class="signup">
                        <p>Dont Have Account Yet ? <a href="./register.php">Click Here</a></p>
                    </div>
                    <div class="validate">
                        <?php
                        include '/xampp/htdocs/GameStop/backend/config/connection.php';
                        if (isset($_POST['confirm'])) {
                            $email = $_POST['email'];
                            $pass = $_POST['password'];
                            // Change 
                            $pass = md5($pass);
                            // 
                            $usertype = $_POST['usertype'];
                            $sql = "SELECT * FROM user_info where email = '$email' and password = '$pass' and usertype = '$usertype'";
                            $query = "SELECT * FROM user_info";
                            $response2 = mysqli_query($connect, $query);
                            $response = mysqli_query($connect, $sql);
                            // getting Name From Database to use in Session
                            if (mysqli_num_rows($response) > 0) {

                                while ($row = mysqli_fetch_assoc($response2)) {
                                    $db_email = $row['email'];
                                    $db_usertype = $row['usertype'];
                                    if ($email == $db_email) {
                                        $name = $row['name'];
                                        $id = $row['id'];
                                    }
                                }
                                // Fetch the data from database to vaidate login
                                $response3 = mysqli_fetch_assoc($response);
                                if ($response3 > 0 && $_POST['usertype'] == "user") {
                                    $_SESSION['name'] = $name;
                                    $_SESSION['id'] = $id;
                                    header('location:../index.php');
                                }
                                if ($response3 > 0 && $_POST['usertype'] == "admin") {
                                    $_SESSION['name'] = $name;
                                    header("location:../admin/homepage.php");
                                } else {
                                    // echo 'Username and password doesnot matched';
                                    echo "<script> alert('Username Password Doesn matched'); </script>";
                                }
                            } else {
                                echo "<script> alert('Please Enter Username and Password') </script>";
                            }
                        } ?>
                    </div>
                    <div class="btn-login">
                        <input type="submit" value="Login" name="confirm" size="20vh">
                    </div>

                </div>
            </form>
        </div>
    </div>

    <<<<<<< HEAD=======<!-- javascript -->
        <?php echo " <script src='../../assets/js/carsoule.js'></script> "; ?>

        >>>>>>> b268b30 (Added Php Mailer Changed Login Page)


</body>

</html>