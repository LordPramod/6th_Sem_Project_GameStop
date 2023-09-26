<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location:../authentication/login.php");
}
?>
<?php
error_reporting(0);
include "./dashboard.php";
include "../../../backend/config/connection.php";
$customer_count = mysqli_query($connect, "SELECT * FROM user_info where usertype = 'user'");
$row_count = mysqli_num_rows($customer_count);
$order_count = mysqli_query($connect, "SELECT * FROM orders where order_status = 'pending'");
$order_row_count = mysqli_num_rows($order_count);
$product_count = mysqli_query($connect, "SELECT * FROM products_details");
$product_row_count = mysqli_num_rows($product_count);
$revenue = mysqli_query($connect, "SELECT SUM(total) as total FROM orders where order_status ='Completed' ");
$revenue_fetch = mysqli_fetch_assoc($revenue);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .main-container {
        width: 100%;
        margin-top: 40px;
        margin-left: 100px;

        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
    }

    table {
        border-collapse: collapse;
    }

    table thead {

        margin-right: 40px;
        background-color: #F6F9FC;
    }

    table thead th {
        padding: 5px 6px;
        text-align: center;
        vertical-align: middle;
        font-family: sans-serif;
        font-weight: lighter;
        font-size: 1.3rem;
        color: #212529;
    }

    table tbody td {
        font-size: 1rem;
    }

    tbody tr td {
        text-align: center;
        vertical-align: middle;
    }

    table td {
        padding: 10px 40px;
    }

    table tbody tr:hover {
        background-color: #dcf0fa;
    }

    .order_status {
        background-color: #f7cb73;
        color: #FFFFFF;
        font-size: 1rem;
        border: none;
        padding: 4px;
        border-radius: 3px;

    }

    table .order_id {
        text-align: center;
        vertical-align: middle;

    }

    table .order_id {
        text-align: center;
        vertical-align: middle;
    }

    tbody td a button {
        background-color: crimson;
        color: #FFFFFF;
        border: none;
        border-radius: 3px;
    }

    tbody td a .complete {
        background-color: green;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/admin-css/homepage.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center" id="dashboard-heading">
                    <h1 class=""> Dashboard </h1>
                </div>
            </div>
            <div class="detail-container">
                <div class="revenue-container">
                    <div class="revenue-heading">
                        <h6>Total Revenue</h6>
                        <i class="fa-solid fa-dollar-sign fa-lg "></i>
                    </div>
                    <h3> <?php echo "Rs" . "" .  $revenue_fetch['total'];  ?></h3>
                </div>
                <div class="customer-container">
                    <a href="../admin/viewaccounts.php">
                        <div class="heading">



                            <h6>Total Customer</h6>
                            <i class="fa-solid fa-user fa-lg"></i>
                        </div>

                        <h3 style="color: white;"><?php echo $row_count; ?></h3>
                    </a>

                </div>
                <div class="order-container">
                    <a href="../admin/pendingOrder.php">
                        <div class="order-heading">

                            <h6>Total Orders</h6>

                            <i class="fa-solid fa-bag-shopping fa-lg" style="color: #f2f4f8;"></i>
                        </div>
                        <h3><?php echo $order_row_count; ?></h3>
                    </a>
                </div>
                <div class="products-container">
                    <a href="../admin/products.php">

                        <div class="product-heading">
                            <h6>Total Products</h6>
                            <i class="fa-brands fa-product-hunt fa-lg"></i>
                        </div>
                        <h3><?php echo $product_row_count; ?></h3>

                    </a>
                </div>
            </div>
        </div>
        <?php
        include "../../../backend/config/connection.php";
        $stmt = "SELECT * FROM orders where order_status = 'pending'";
        $response = mysqli_query($connect, $stmt);
        ?>
        <div class="main-container">
            <h1 style="text-align: center; color:crimson;">Pending Orders</h1>
            <table>
                <tr>
                    <thead>
                        <th class="order_id">Order No</th>
                        <th>Date</th>
                        <th>Payment Gateway</th>
                        <th>OrderStatus</th>
                        <th>Purchase Date</th>
                        <th class="action">Email</th>

                    </thead>
                </tr>



                <?php if (mysqli_num_rows($response) > 0) { ?>

                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($response)) { ?>

                            <tr>



                                <td><?php echo $oderid = '#' . 6000 . $row['order_id']; ?></td>
                                <td><?php echo $row['purchase_date']; ?></td>
                                <td><?php echo  $row['payment_method']; ?></td>
                                <td><span class="order_status"><?php echo $oderid =  $row['order_status']; ?></span></td>
                                <td><?php echo  $row['purchase_date']; ?></td>
                                <td><?php echo  $row['email']; ?></td>
                            </tr>
                    <?php }
                    } else {
                        echo "NO ORDER YET MAKE YOU FIRST ORDER";
                    } ?>
                    </tbody>

            </table>
        </div>
</body>

</html>