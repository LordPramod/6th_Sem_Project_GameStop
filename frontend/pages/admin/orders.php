<?php
include "dashboard.php";
?>
<?php
include "../../../backend/config/connection.php";
$stmt = "SELECT * FROM orders";
$response = mysqli_query($connect, $stmt);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .main-container {
        width: 90%;
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
    }

    .orders-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .order-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        transition: transform 0.2s ease;
    }

    .order-card:hover {
        transform: translateY(-5px);
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    .order-id {
        font-size: 1.2rem;
        font-weight: bold;
        color: #2d3748;
    }

    .order-date {
        color: #718096;
        font-size: 0.9rem;
    }

    .order-info {
        margin: 10px 0;
    }

    .info-row {
        display: flex;
        justify-content: space-between;
        margin: 8px 0;
        color: #4a5568;
    }

    .order-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .status-pending {
        background-color: #f7cb73;
        color: #744210;
    }

    .status-completed {
        background-color: #48bb78;
        color: white;
    }

    .status-cancelled {
        background-color: #f56565;
        color: white;
    }

    .order-detail-btn {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 15px;
        background-color: #4299e1;
        color: white;
        text-align: center;
        border-radius: 6px;
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .order-detail-btn:hover {
        background-color: #3182ce;
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
        <div class="orders-grid">
            <?php if (mysqli_num_rows($response) > 0) { 
                while ($row = mysqli_fetch_assoc($response)) { ?>
                    <div class="order-card">
                        <div class="order-header">
                            <span class="order-id"><?php echo '#' . 6000 . $row['order_id']; ?></span>
                            <span class="order-date"><?php echo $row['purchase_date']; ?></span>
                        </div>
                        
                        <div class="order-info">
                            <div class="info-row">
                                <span>Amount:</span>
                                <strong>$<?php echo $row['total']; ?></strong>
                            </div>
                            <div class="info-row">
                                <span>Payment:</span>
                                <strong><?php echo $row['payment_method']; ?></strong>
                            </div>
                            <div class="info-row">
                                <span>Status:</span>
                                <span class="order-status <?php 
                                    echo $row['order_status'] == 'pending' ? 'status-pending' : 
                                        ($row['order_status'] == 'Completed' ? 'status-completed' : 'status-cancelled'); 
                                ?>">
                                    <?php echo ucfirst($row['order_status']); ?>
                                </span>
                            </div>
                        </div>
                        
                        <a href="viewSingleProduct.php?id=<?php echo $row['order_id']; ?>" class="order-detail-btn">
                            Order Details
                        </a>
                    </div>
                <?php } 
            } else { ?>
                <div class="no-orders">No orders yet. Make your first order!</div>
            <?php } ?>
        </div>
    </div>

</body>

</html>