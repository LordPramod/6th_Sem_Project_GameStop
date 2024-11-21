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

        <div class="carousel">

            <div class="carousel-inner">

                <img class="img-item" src="../../assets/images/black-myth-wukong.jpg" alt="Image 1">

                <img class="img-item" src="../../assets/images/modernwarefareII.jpg" alt="Image 2">

                <img class="img-item" src="../../assets/images/login_page_background.jpg" alt="Image 3">

            </div>

        </div>


    </div>

    <div class="right">

        <div class="form-body">
            <h1 class="heading">Login</h1>
            <p class="login-page">Welcome to Login.</p>

            <form action="login.php" method="post">
                <div class="form-div">
                    <label for="email">Email </label><br>
                    <input type="email" name="email" placeholder="Enter Your Email" size="50vh"
                        autocomplete="new-password" class="form-contol" required autocomplete="off"><br>

                    <div class="form-div">
                        <label for="password">Password </label><br>
                        <input type="password" name="password" size="50vh" placeholder="Enter Your Password"
                            class="form-contol" required autocomplete="off"><br>
                    </div>

                    <div class="signup">
                        <p>Dont Have Account Yet ? <a href="./register.php">Click Here</a></p>
                    </div>
                    <div class="validate">
                        <?php

                        include '../../../backend/config/connection.php';

                        if (isset($_POST['confirm'])) {
                            $email = $_POST['email'];
                            $pass = md5($_POST['password']); // Consider using a more secure hashing algorithm
                        
                            $stmt = $connect->prepare("SELECT * FROM user_info WHERE email = ? AND password = ?");
                            $stmt->bind_param("ss", $email, $pass);
                            $stmt->execute();
                            $response = $stmt->get_result();

                            if ($response->num_rows > 0) {
                                $row = $response->fetch_assoc();
                                $db_usertype = $row['usertype'];
                                $name = $row['name'];
                                $id = $row['id'];

                                $_SESSION['name'] = $name;
                                $_SESSION['id'] = $id;

                                if ($db_usertype == 'user') {
                                    header('Location: ../index.php');
                                } elseif ($db_usertype == 'admin') {
                                    header('Location: ../admin/homepage.php');
                                }
                                exit(); // Ensure the script stops executing after the redirect
                            } else {
                                echo "<script>alert('Username or Password does not match');</script>";
                            }
                        }
                        ?>


                    </div>
                    <div class="btn-login">
                        <input type="submit" value="Login" name="confirm" size="20vh">
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- javascript -->
    <?php echo " <script src='../../assets/js/carsoule.js'></script> "; ?>



</body>

</html>