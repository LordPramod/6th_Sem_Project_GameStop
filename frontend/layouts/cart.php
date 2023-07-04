<?php
include "../../frontend/layouts/nav-bar-config.php";
include "../../backend/config/connection.php";
?>
<!-- Statement to Fetch Data of single user -->
<?php
session_start();
if (isset($_SESSION['name'])) {
    $stmt = mysqli_query($connect, "SELECT * FROM pdt_cart where user_id = {$_SESSION['id']}");
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
</head>
<style>
#img {
    width: 100px;
    height: 100px;
}
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 text">
                <h1 class="">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table text-center tabel-bordered">
                    <thead class="bg-dark text-white fs-5">
                        <th>Index No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Delete</th>
                    </thead>
                    <tbody class="bg-light">


                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($stmt)) { ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_price']; ?></td>
                            <td> <input type="number" name="quantity" min='1' max="5"
                                    value="<?php echo $row['product_quantity']; ?>" id=""></td>
                            <td><?php echo $row['total_amount']; ?></td>
                            <td><a
                                    href="../../backend//functions/deleteCart.php?id=<?php echo $row['cart_id'];?>">Delete</a>
                            </td>
                            <td></td>

                        </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
                <a href="../layouts/payment.php"><input type="submit" class="btn" id="checkout-btn"
                        value="Check out"></a>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include "../../frontend/layouts/footer.php";
?>