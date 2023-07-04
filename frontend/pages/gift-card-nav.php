<?php
include "../../backend/config/connection.php";
include "../layouts/nav-bar-config.php";
$stmt = "SELECT * FROM products_details where products_category = '1' or products_category = '2'";
$response = mysqli_query($connect, $stmt);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
    .border-container {
        border: none;
        margin-top: 100px;
        height: 190px;
        background-color: #111111;
    }

    .product-container {
        /* border: 1px solid red; */
        display: flex;
        margin: -80px;
        height: auto;
        width: 1115px;
        margin-left: 200px;
        background-color: #F2F2F2;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .image-container {
        /* width: 160px; */
        width: 260px;
        margin-top: 20px;
        margin-left: 10px;
        /* border: 3px solid red; */
        box-shadow: 5px 5px 15px 5px #FFFFFF;
        margin-bottom: 20px;
    }

    .image-container img {
        border: 3px solid green;
        margin: 0 auto;
        height: 240px;
        display: flex;
    }

    .product-title-container {
        margin-top: 20px;
    }

    .product-title-container h5 {
        text-align: center;
    }

    #btn-view {
        background-color: #111111;
        margin: 0 auto;
        color: white;
        margin: 0px 90px;
    }

    #btn-view:hover {
        background-color: crimson;
        border: none;
    }
    </style>
</head>


<body>
    <div class="border-container">

    </div>
    <div class="product-container ">
        <?php while ($row = mysqli_fetch_assoc($response)) { ?>


        <div class="image-container">
            <img src="../assets/images/<?php echo $row['product_image']; ?>" alt="Product Image">
            <div class="product-title-container">
                <h5><?php echo $row['pdt_name']; ?></h5>
                <a href="./productview.php?id=<?php echo $row['id']; ?>" class="btn " id="btn-view">View</a>
            </div>
        </div>

        <?php } ?>
    </div>
    </div>
    </div>
</body>

</html>