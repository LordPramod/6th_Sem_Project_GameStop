<?php
include '/xampp/htdocs/GameStop/backend/config/connection.php';
<<<<<<< HEAD
=======
include '../../../backend/config/mailer.php';
>>>>>>> b268b30 (Added Php Mailer Changed Login Page)

if (isset($_POST['confirm'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass = md5($pass);
    $cpass = md5($_POST['cpassword']);

    $check = "SELECT * FROM user_info WHERE email = '$email' &&  password ='$pass'";
    $result = mysqli_query($connect, $check);
    $check2 = "SELECT * FROM user_info WHERE phone = '$number'";
    $result2 = mysqli_query($connect, $check2);
    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert(Email Already Existed Please Try another one)</script>";
    } else {
        if ($pass != $cpass) {
            echo "Password And confirm Password didn't matched";
        } else {
            $insert = "INSERT INTO user_info(name, email , phone, password ) VALUES ('$name','$email','$number','$pass')";
            mysqli_query($connect, $insert);
<<<<<<< HEAD

            header('location:login.php');
        }
    }
}
=======
            $mail->setFrom("thapapramod821@gmai.com", "GameStop");
            $mail->addAddress($email);
            $mail->Subject = "Welcome to GameStop! Confirm Your Account";
            $mail->Body = "
    
            Dear ,<?php echo $name ?> <br> <br>
            Thank you for registering with GameStop! We're excited to have you on board.<br>

            If you did not register for a GamesStop account, please ignore this email.

            For any questions or assistance, feel free to reach out to our support team at thapapramod821@gmail.com. ";
            try {
                $mail->send();

            } catch (Exception $e) {
                echo "Message Couldnt nott be sent . Mailer error:{$mail->ErrorInfo}";
            }


        }
        echo "Message Sent, please check your inbox";

        header('location:login.php');
    }
}

>>>>>>> b268b30 (Added Php Mailer Changed Login Page)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- linking css for styling -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css?v=1">
    <link rel="stylesheet" href="../../assets/css/register.css">
    <!-- Awsome font for Icon and other stuff -->


</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-80 gradient-custom-3">
            <div class="container h-100" id="form">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5" style="color: crimson;">Create an account
                                </h2>

                                <form action="register.php" method="post">

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example1cg">Full Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="name" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example3cg">Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                            name="email" required />
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example3cg">Phone Number</label>
                                        <input type="tel" id="form3Example3cg" class="form-control form-control-lg"
                                            name="number" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                                            name="password" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example4cdg">Confirm Password</label>
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" name="cpassword" required />
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-3">
                                        <input class="form-check-input me-2" style="color:crimson;" type="checkbox"
                                            value="" id="form2Example3cg" required />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center" id="btn-register">
                                        <input type="submit" class=" btn-block btn-lg  " value="Register"
                                            name="confirm">
                                    </div>

                                    <p class="text-center text-muted mt-3 mb-0">Have already an account? <a
                                            href="./login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<!-- <?php include "../../layouts/footer.php";
<<<<<<< HEAD
        ?> -->
=======
?> -->
>>>>>>> b268b30 (Added Php Mailer Changed Login Page)
