<?php
include "./nav-bar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>
#img {
    width: 100px;
    height: 100px;
}
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 text">
                <h1 class="">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table text-center tabel-bordered">
                    <thead class="bg-dark text-white fs-5">
                        <th>Index No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $value) { ?>
                        <tr>
                            <td></td>
                            <td>$value[ProductName]</td>
                            <td>$value[ProductPrice]</td>
                            <td>$value[ProductQuantity]</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include "./footer.php";
?>