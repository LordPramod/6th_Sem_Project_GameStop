<?php 
include '../../backend/config/connection.php';

$days = 30;
$date_limit = date('Y-m-d', strtotime("-$days days"));

$sql = "SELECT 
    o.product_name,
    o.product_image,
    pd.pdt_price,
    pd.id,
    SUM(o.quantity) as total_sold,
    SUM(o.total) as total_revenue
FROM 
    orders o
JOIN 
    products_details pd ON o.product_name = pd.pdt_name
WHERE 
    o.purchase_date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)  -- Last 30 days
GROUP BY 
    o.product_name, o.product_image, pd.pdt_price, pd.id
ORDER BY 
    total_sold DESC
LIMIT 10";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Top 10 Best-Selling Products</title>
        <link rel="stylesheet" href="../assets/css/bestselling.css">
    </head>
    <body>
        <div class="product-container">
            <div class="product-heading">
                <h2> Best-Selling Products in the Last 30 Days</h2>
            </div>
            <div class="products-container">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <!-- Image Container -->
                    <div class="image-container">
                        <img src="../assets/images/<?php echo $row['product_image']; ?>" alt="Product Image">
                        <div class="product-title-container">
                            <a href="../pages/productview.php?id=<?php echo $row['id']; ?>">
                                <?php echo htmlspecialchars($row['product_name']); ?>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "No best-selling products found in the last $days days.";
}

$connect->close();
?>
