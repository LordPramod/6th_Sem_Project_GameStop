<?php
include '../layouts/nav-bar.php';
include '../../backend/config/connection.php';
?>
<?php
$stmt = "SELECT * FROM products_details";
$response = mysqli_query($connect, $stmt);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStop</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/googlegiftcard100.css?v=1">
</head>

<body>
    <div class="border-container">

        <h3 class=""> Google Account with 100$ Balance </h3>
    </div>
    <div class="product-content-container ">

        <div class="row ">
            <div class="col-6 mt-3">
                <div class="image-container">
                    <img src="../assets/images/GOOGLE ACCOUNT 100$ .jpg" alt="google-gift-card-100 (US)">
                </div>

            </div>
            <div class="col-6 mt-3">
                <div class="content-container">
                    <form action="insertCart.php" method="post">

                        <p>Price goes here</p>
                        <input type="hidden" name="Pproduct" value="Google-Gift-Card 100">
                        <input type="hidden" name="Pprice" value="1000">
                        <input type="number" name="Pamount" id="" value="min='1' max='5'" class=" form-control ">


                        <input type="submit" class="btn btn-dark" value="Add to Cart" id="btn_buynow" name="addCart">


                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            HELLO WORLD
        </div>
    </div>

</body>

</html>
<?php
include '../layouts/footer.php';
?>