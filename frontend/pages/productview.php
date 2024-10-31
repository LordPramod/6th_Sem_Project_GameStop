<?php
include '../layouts/nav-bar-config.php';
include '../../backend/config/connection.php';
?>
<?php
$id = $_GET['id'];
$stmt = "SELECT * FROM products_details where id = '$id'";
$response = mysqli_query($connect, $stmt);
$row = mysqli_fetch_assoc($response);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStop</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/productview.css">
</head>

<body>
    <div class="border-container">

        <h3 class="fs-5"> <?php echo $row['pdt_name']; ?></h3>
    </div>
    <div class="product-content-container ">

        <div class="row ">
            <div class="col-6 mt-3">
                <div class="image-container">
                    <img src="../assets/images/<?php echo $row['product_image']; ?>" alt="Product Image">
                </div>

            </div>
            <div class="col-6 mt-3">
                <div class="content-container">
                    <form action="../../backend/functions/insertCart.php" method="post">
                        <h2><?php echo $row['pdt_name']; ?></h2>
                        <h4>Price <?php echo $row['pdt_price']; ?></h4>
                        <input type="hidden" name="Pproduct" value="<?php echo $row['pdt_id']; ?>">
                        <input type="hidden" name="Pid" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="Pproduct" value="<?php echo $row['pdt_name']; ?>">
                        <input type="hidden" name="Pprice" value="<?php echo $row['pdt_price']; ?>">
                        <input type="hidden" name="Pimage" value="<?php echo $row['product_image']; ?>">
                        <span>Quantity:</span><input type="number" name="Pamount" id="" value="1" max="5" min="1" class=" form-control "><br><br>


                        <input type="submit" class="btn btn-dark" value="Add to Cart" id="btn_buynow" name="addCart">


                    </form>
                </div>
                
                
            </div>
            <div class="description">
            <span style="font-size: 1.1rem;"><?php echo $row['description'] ?></span>
        </div>
        </div>
    </div>

</body>

</html>
<?php
include '../layouts/footer.php';
?>