<?php
include "../../frontend/layouts/nav-bar-config.php";
include "../../backend/config/connection.php";
?>
<!-- Statement to Fetch Data of single user -->
<?php
session_start();
if (isset($_SESSION['name'])) {
    $stmt = mysqli_query($connect, "SELECT * FROM pdt_cart where user_id = {$_SESSION['id']}");
    if (isset($_POST['buynow'])) {

        $check_stmt =  mysqli_query($connect, "SELECT * FROM checkout_detail where Uid = {$_SESSION['id']}");
        if (mysqli_num_rows($check_stmt) > 0) {
            header("location:./payment.php");
        } else {
            header("location:../pages/checkout.php");
        }
    }
} else {
    header('location:../pages/authentication/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css"></script>
    <link rel="stylesheet" href="style.https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">
</head>
<style>
    #container h1 {
        /* border: 1px solid green; */
        margin-top: 40px;
        text-align: center;
        color: crimson;
        font-family: sans-serif;
    }

    .container-fluid {
        margin-top: 20px;
    }


    #img {
        width: 100px;
        height: 100px;
    }

    .btn-checkout {
        margin-top: 80px;
        margin-bottom: 10px;
        margin-left: 1000px;
    }

    .btn-checkout a input {
        display: inline-block;
        background-color: #111111;
        color: #FFFFFF;

    }

    .btn-checkout a :hover {
        background-color: crimson;
        color: #FFFFFF;

    }

    .card {
        margin: 15px;
        transition: transform 0.2s; /* Animation for hover effect */
    }

    .card:hover {
        transform: scale(1.05); /* Scale effect on hover */
    }

    .card-img-top {
        width: 100%; /* Full width of the card */
        height: 200px; /* Fixed height for images */
        object-fit: contain; /* Maintain aspect ratio and show full image */
    }

    .btn-checkout {
        text-align: center; /* Center the checkout button */
        margin-top: 20px;
    }
</style>

<body>
    <div class="container mt-5" id="container">
        <div class="row">
            <div class="col-lg-12 text">
                <h1 class="">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <?php
            while ($row = mysqli_fetch_assoc($stmt)) { ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="../assets/images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                            <p class="card-text">Price: $<?php echo $row['product_price']; ?></p>
                            <p class="card-text">Quantity: <?php echo $row['product_quantity']; ?></p>
                            <p class="card-text">Total: $<?php echo $row['total_amount']; ?></p>
                            <a href="../../backend/functions/deleteCart.php?id=<?php echo $row['cart_id']; ?>" class="btn btn-danger">Delete</a>
                            <a href="../../backend/functions/updateCart.php?id=<?php echo $row['cart_id']; ?>" class="btn btn-warning">Update</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="btn-checkout">
            <form action="cart.php" method="post">
                <input type="submit" class="btn btn-primary" id="checkout-btn" value="Buy Now" name="buynow">
            </form>
        </div>
    </div>

</body>

</html>
<?php
include "../../frontend/layouts/footer.php";
?>