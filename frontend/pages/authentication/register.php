<?php
include '/xampp/htdocs/GameStop/backend/config/connection.php';
include '../../layouts/nav-bar.php';
if (isset($_POST['confirm'])) {
  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $number = $_POST['phone_number'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];

  $check = "SELECT * FROM user_info WHERE email = '$email' &&  password ='$pass'";
  $result = mysqli_query($connect, $check);
  if (mysqli_num_rows($result) > 0) {
    echo "Email Already Existed Please Try another one";
  } else {
    if ($pass != $cpass) {
      echo "Password And confirm Password didn't matched";
    } else {
      $insert = "INSERT INTO user_info(fname , lname, email , phone, password , cpassword) VALUES ('$fname','$lname','$email','$number','$pass','$cpass')";
      mysqli_query($connect, $insert);

      header('location:login.php');
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- linking css for styling -->
  <link rel="stylesheet" href="../../assets/css/register.css">
  <!-- Awsome font for Icon and other stuff -->


</head>

<body>

  <div class="form-main">
    <h1 class="heading">Sign Up</h1>

    <form action="register.php" method="post">
      <div class="form-control-name">
        <label for="fname">First Name </label><br>
        <input type="text" name="f_name" placeholder="John" required size="20vh"><br>
        <label for="lname">Last Name </label><br>
        <input type="text" name="l_name" placeholder="Doe" required size="20vh"><br>
      </div>


      <div class="form-control">
        <label for="phonenumber">Phone Number </label><br>
        <input type="tel" name="phone_number" placeholder="98********" required size="40vh"><br>
      </div>

      <div class="form-control">
        <label for="email">Email </label><br>
        <input type="email" name="email" placeholder="Johndoe@gmail.com" required size="40vh"><br>
      </div>
      <!-- <span><p>Please use valid phone number. You will receive a verification code
        in this phone number to verify your account..</p></span> -->

      <div class="form-control">
        <label for="password">Password </label><br>
        <input type="password" name="password" required size="40vh"><br>
      </div>

      <div class="form-control">
        <label for="cpassword">Confirm Password </label><br>
        <input type="password" name="cpassword" required size="40vh"><br>
      </div>
      <input type="submit" name="confirm" value="Register" name="confrim">
    </form>
  </div>


</body>

</html>