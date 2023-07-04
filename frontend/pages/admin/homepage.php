<?php

include "./dashboard.php";
include "../../../backend/config/connection.php";
$customer_count = mysqli_query($connect, "SELECT * FROM user_info where usertype = 'user'");
$row_count = mysqli_num_rows($customer_count);
$order_count = mysqli_query($connect, "SELECT * FROM pdt_order where order_status = 'pending'");
$order_row_count = mysqli_num_rows($customer_count);
?>
<!DOCTYPE html>
<html lang="en">

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
                    <h2 class=""> Dashboard </h2>
                </div>
            </div>
            <div class="detail-container">
                <div class="revenue-container">
                    <div class="revenue-heading">
                        <h6>Total Revenue</h6>
                        <i class="fa-solid fa-dollar-sign fa-lg "></i>
                    </div>
                    <h3> $10,000 </h3>
                </div>
                <div class="customer-container">
                    <div class="heading">


                        <h6>Total Customer</h6>
                        <i class="fa-solid fa-user fa-lg"></i>
                    </div>

                    <h3 style="color: white;"><?php echo $row_count; ?></h3>

                </div>
                <div class="order-container">
                    <div class="order-heading">

                        <h6>Total Orders</h6>
                        <i class="fa-solid fa-bag-shopping fa-lg" style="color: #f2f4f8;"></i>
                    </div>
                    <h3><?php echo $order_row_count; ?></h3>
                </div>
            </div>
        </div>

</body>

</html>