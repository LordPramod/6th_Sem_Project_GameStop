<?php
include "../../backend/config/connection.php";
include "./nav-bar-config.php";
session_start();
if (isset($_SESSION['name'])) {

    $cart_stmt = mysqli_query($connect, "SELECT * FROM pdt_cart where user_id = {$_SESSION['id']}");
} else {
    header("location:../pages/authentication/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStop</title>
    <link rel="stylesheet" href="../assets/css/paymnet.css">
</head>

<body>
    <div class="main-container">
        <div class="order-container">
            <h1>Order Details</h1>
            <div class="order-main">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (mysqli_num_rows($cart_stmt) > 0) {

                            while ($row = mysqli_fetch_assoc($cart_stmt)) { ?>
                                <tr>
                                    <td class="pdt-image"><img src="../assets/images/<?php echo $row['image']; ?>"
                                            alt="product_image"></td>
                                    <td><?php echo $row['product_name']; ?></td>
                                    <td><?php echo $row['product_price']; ?></td>
                                    <td><?php echo $row['product_quantity']; ?></td>
                                    <td><?php echo $row['total_amount']; ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="not-found"><?php echo "Product not Found"; ?></td>
                            <?php }
                        ?>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="total-container">
                <h1>Total</h1>
                <?php
                $total_amount = mysqli_query($connect, "SELECT sum(total_amount) as total FROM pdt_cart where user_id ={$_SESSION['id']}");
                $fetch_total = mysqli_fetch_assoc($total_amount);
                $discount = 0;

                ?>
                <span>Amount : <?php echo $fetch_total['total']; ?></span><br>
                <span>Discount : <?php echo $discount; ?></span><br>
                <span>Total Amount : <?php echo $fetch_total['total'] - $discount; ?> </span>
            </div>

        </div>
        <div class="payment-container">
            <div class="shipping-container">
                <h1>Shipping Details</h1><br>
                <?php $shipping_stmt = mysqli_query($connect, "SELECT * FROM checkout_detail where Uid = {$_SESSION['id']}");
                $data = mysqli_fetch_assoc($shipping_stmt) ?>
                <span>Name:</span> <input type="text" name="" value='<?php echo $data['Cname']; ?>' id="" disabled> <br>
                <span>Email: </span><input type="text" name="" value='<?php echo $data['Cemail']; ?>' id="" disabled>
                <br>
                <span>City:</span> <input type="text" disabled name="" value="<?php echo $data['Ccity']; ?>"><br>
                <span>Address:</span><input type="text" disabled name="" value="<?php echo $data['Caddress']; ?>" id="">

            </div>
            <div class="pay-container">
                <h1>Payment Methods</h1>
                <form action="../../backend/functions/insertOrder.php" method="post">
                    <input type="radio" name="payment-method" id="esewa" value="1">
                    <label for="esewa"><img src="../assets/images/Esewa.png" alt=""></label>
                    <input type="radio" name="payment-method" id="cod" value="2"><img src="" alt="">
                    <label for="cod" class="cod">Cash
                        On Delivery</label>
                    <input type="submit" value="Place Order" name="placeorder">
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include "./footer.php";
?>