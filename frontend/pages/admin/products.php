<?php

include "./dashboard.php";
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        padding: 2rem;
        margin-left: max(200px, 15%);
        width: calc(100% - max(200px, 15%));
    }

    .addProducts {
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .addProducts a {
        background-color: #111111;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        color: #FFFFFF;
        transition: all 0.3s ease;
    }

    .addProducts a:hover {
        background-color: crimson;
        color: #FFFFFF;
        transform: translateY(-2px);
    }

    .addProducts h2 {
        color: crimson;
        margin: 0;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .product-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .product-info {
        padding: 1.5rem;
    }

    .product-name {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .product-price {
        color: crimson;
        font-size: 1.1rem;
        margin-bottom: 1rem;
    }

    .product-actions {
        display: flex;
        gap: 1rem;
    }

    .btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-update {
        background-color: #007bff;
        color: white;
    }

    .btn-delete {
        background-color: crimson;
        color: white;
    }

    .btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="addProducts">
            <h2>Products</h2>
            <a href="./product/index.php" class="text-decoration-none fs-4 fw-bold">Add Product</a>
        </div>

        <div class="products-grid">
            <?php
            include "../../../backend/config/connection.php";
            $stmt = "SELECT * FROM products_details";
            $response = mysqli_query($connect, $stmt);
            
            while ($row = mysqli_fetch_assoc($response)) { ?>
                <div class="product-card">
                    <img src="../../assets/images/<?php echo $row['product_image']; ?>" alt="<?php echo $row['pdt_name']; ?>" class="product-image">
                    <div class="product-info">
                        <h3 class="product-name"><?php echo $row['pdt_name']; ?></h3>
                        <p class="product-price"><?php echo $row['pdt_price']; ?></p>
                        <div class="product-actions">
                            <a href="" class="btn btn-update">Update</a>
                            <a href="./product/deleteproduct.php?id=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>