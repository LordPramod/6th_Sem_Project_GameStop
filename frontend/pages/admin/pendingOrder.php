<?php
include "dashboard.php";
?>
<?php
include "../../../backend/config/connection.php";
$stmt = "SELECT * FROM orders where order_status = 'pending'";
$response = mysqli_query($connect, $stmt);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .main-container {
        width: 95%;
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
    }

    .orders-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .order-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .order-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .order-id {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 15px;
    }

    .order-info {
        margin: 10px 0;
        color: #666;
    }

    .order-status {
        display: inline-block;
        background-color: #f7cb73;
        color: #FFFFFF;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.9rem;
        margin: 10px 0;
    }

    .button-group {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .btn {
        flex: 1;
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        transition: transform 0.1s, opacity 0.1s;
    }

    .btn:hover {
        opacity: 0.9;
        transform: scale(1.02);
    }

    .btn:active {
        transform: scale(0.98);
    }

    .btn-complete {
        background-color: #2ecc71;
    }

    .btn-cancel {
        background-color: #e74c3c;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .main-container {
            margin: 20px auto;
            width: 90%;
        }
        
        .orders-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1 style="text-align: center; color:crimson;">Pending Orders</h1>
        <div class="orders-grid">
            <?php if (mysqli_num_rows($response) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($response)) { ?>
                    <div class="order-card">
                        <div class="order-id">Order No: #<?php echo 6000 . $row['order_id']; ?></div>
                        <div class="order-info">
                            <p>Date: <?php echo $row['purchase_date']; ?></p>
                            <p>Payment Gateway: <?php echo $row['payment_method']; ?></p>
                            <p>Order Status: <span class="order_status"><?php echo $row['order_status']; ?></span></p>
                            <p>Purchase Date: <?php echo $row['purchase_date']; ?></p>
                        </div>
                        <div class="button-group">
                            <a href="../../../backend/functions/updateOrderStatus.php?id=<?php echo $row['order_id']; ?>"><button class="btn btn-complete">Complete</button></a>
                            <a href="../../../backend/functions/cancelOrder.php?id=<?php echo $row['order_id']; ?>"><button class="btn btn-cancel">Cancel</button></a>
                        </div>
                    </div>
                <?php }
                } else {
                    echo "NO ORDER YET MAKE YOU FIRST ORDER";
                } ?>
        </div>
    </div>

</body>

</html>