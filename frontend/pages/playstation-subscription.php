<?php
include "../layouts/nav-bar.php";
include "../../backend/config/connection.php";
// session_start();
if (isset($_SESSION['username'])) {
    $query = "SELECT * FROM products_details";
    $respone = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($respone) > 0) { ?>
        <table border='1'>
            <tr>
                <th>
                    <?php echo $row = ['id']; ?>

                </th>
                <?php echo $row = ['product name']; ?>
                <th>

                </th>
                <th>
                    <?php echo $row = ['Product price']; ?>

                </th>
            </tr>
        </table>
    <?php } ?>
<?php }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/playstation-subscription.css?v=1">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/PLAY STATION ALL.jpg" alt="PlayStation 1 Month Subscription">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 1 Month Subscription</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>l
<?php
include "../layouts/footer.php";
?>