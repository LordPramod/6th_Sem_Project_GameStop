<?php
include "../../backend/config/connection.php";
include '../layouts/nav-bar-config.php';
$stmt = mysqli_query($connect, "SELECT * FROM products_details where products_category='9'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/playstation-subscription.css?v=1">
    <style>
        #btn-view {
            background-color: #111111;
            color: white;
        }

        #btn-view:hover {
            background-color: crimson;
            border: none;
        }

        .card img {
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            if (mysqli_num_rows($stmt) > 0) {

                while ($row = mysqli_fetch_assoc($stmt)) { ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../assets/images/<?php echo $row['product_image']; ?>"
                                alt="PlayStation  Monthly Subscription">
                            <div class="card-body">
                                <h6 class="card-title text-center "> <?php echo $row['pdt_name']; ?> </h6>
                                <p class="card-text text-center">Rs. <?php echo $row['pdt_price']; ?></p>
                                <a href="./productview.php?id=<?php echo $row['id']; ?>" class="btn "
                                    style="align-items: center;" id="btn-view">View</a>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                echo "<h1 style='font-style : bold ;font-size: 3rem;'> No Products Available<h1>";
            }
            ?>

        </div>
    </div>

</body>

</html>l
<?php
include "../layouts/footer.php";
?>