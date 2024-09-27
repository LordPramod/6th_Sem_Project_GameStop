<?php
include "../../backend/config/connection.php";
if (isset($_POST['checkout'])) {
    session_start();
    $userid = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $check_stmt = mysqli_query($connect, "SELECT * FROM checkout_detail where Uid = {$_SESSION['id']}");
    if (mysqli_num_rows($check_stmt) > 0) {
        header("location:../layouts/payment.php");
        echo "<script> alert('Billing Address Already Existed') </script>";
    } else {
        $insert_stmt = mysqli_query($connect, "INSERT INTO checkout_detail (Uid,Cname,Cemail,Cphone,Ccity,Caddress)values('$userid','$name','$email','$phone','$city','$address')");
        header("location:../layouts/payment.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/checkout.css">
</head>
<?php include "../layouts/nav-bar-config.php" ?>

<body>
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">

            <h2 class="form-weight-bold">Check Out</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form action="#" method="post" id="checkout-form">
                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="checkout-name" placeholder="Name" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <<<<<<< HEAD <input type="email" class="form-control" name="email" id="checkout-email"
                        placeholder="Email" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="checkout-phone" placeholder="Phone"
                        required>
                    =======
                    <input type="email" class="form-control" name="email" id="checkout-email" placeholder="Email"
                        required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="checkout-phone" placeholder="Phone"
                        required>
                    >>>>>>> b268b30 (Added Php Mailer Changed Login Page)
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" id="checkout-city" placeholder="City" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Address</label>
                    <<<<<<< HEAD <input type="text" class="form-control" name="address" id="checkout-address"
                        placeholder="Address" required>
                        =======
                        <input type="text" class="form-control" name="address" id="checkout-address"
                            placeholder="Address" required>
                        >>>>>>> b268b30 (Added Php Mailer Changed Login Page)
                </div>
                <div class="form-group checkout-btn-container">
                    <input type="submit" class="btn" id="checkout-btn" value="Check out" name="checkout">
                </div>
            </form>
        </div>

    </section>
</body>

</html>
<?php include "../layouts/footer.php" ?>