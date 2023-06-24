<?php
include '../layouts/nav-bar.php';
include '../../backend/config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamestop</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/googlegiftcards.css?v=1">
</head>

<body>
    <div class="border-container">
    </div>
    <?php
    $stmt = "SELECT * FROM products_details";
    $response = mysqli_query($connect, $stmt);

    ?>
    <div class="container" id="card-container">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($GLOBALS['response'])) { ?>
                <!-- image Container -->

                <div class="col-lg-3 col-md-6" id="card">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../assets/images/<?php echo $row['product_image']; ?>" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href=""><?php echo $row["pdt_name"]; ?></a></h5>
                            <p class="card-text"> <a href=""><?php echo "Rs." . " " . $row["pdt_price"]; ?></a></p>
                            <a href="./<?php echo $row['product_location']; ?>" class="btn btn-primary " style="align-items: center;" id="btn-view">View</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>
<?php
include "../layouts/footer.php";
?>