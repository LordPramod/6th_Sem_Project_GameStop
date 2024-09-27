<?php
include "../../backend/config/connection.php";

?>
<?php
$stmt = "SELECT * FROM pdt_category";
$result = mysqli_query($connect, $stmt);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/card.css">

</head>

<body>
    <div class="product-container">

        <div class="product-heading">
            <h2>Product Category</h2>
        </div>
        <div class="products-container">
            <?php while ($row = mysqli_fetch_assoc($GLOBALS['result'])) { ?>
                <!-- image Container -->
                <div class="image-container">
                    <a href="../pages/view-category-products.php?id=<?php echo $row['C_id']; ?>">
<<<<<<< HEAD
                        <img src="../assets/images/<?php echo $row['products_category_image']; ?>" alt="Google-Gift-Card" srcset="">
=======
                        <img src="../assets/images/<?php echo $row['product_category_image'];?>" alt="category_image" srcset="">
>>>>>>> b268b30 (Added Php Mailer Changed Login Page)
                    </a>
                    <div class="product-title-container">
                        <a href="../pages/view-category-products.php?id=<?php echo $row['C_id']; ?>"><?php echo $row['pdt_category_name']; ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
</body>

</html>