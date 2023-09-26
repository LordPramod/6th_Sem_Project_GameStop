<?php


error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/nav-bar.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- <link rel="stylesheet" href="../assets/css/footer.css"> -->
    <link rel="stylesheet" href="../assets/css/card.css">

</head>

<body>
    <div class="container-header">
        <div class="container-logo">
            <a href="../pages/index.php"><img src="../assets/images/500px-GameStop.svg.png" alt="GameStop logo"></a>
        </div>
        <div class="container-center">
            <div class="search-form">
                <form action="../pages/searchbar.php" method="post">

                    <input type="search" name="search" id="" placeholder="Search for products..">
            </div>
            <div class="btn-search">
                <input type="submit" value="Search">
                </form>
            </div>
        </div>

        <!-- Icons Import from Hero Icons -->
        <div class="conatiner-right">
            <div class="icon-container">
                <div class="icon-cart">
                    <a href="../layouts/cart.php"><i class="fa fa fa-light fa-cart-shopping fa-xl" style="color:#ffffff;"></i></a>
                </div>
                <div class="icon-wallet">
                    <a href="#"><i class="fa fa-duotone fa-wallet fa-xl" style="color: #ffffff;"></i></a>
                </div>
                <div class="icon-account">
                    <a href="../pages/authentication/login.php"><i class="fa fa-duotone fa-user fa-xl" style="color: #ffffff;"></i></a>
                </div>
                <div class="account-content-container">
                    <p>
                    </p>
                    <span> <a href="../pages/authentication/login.php">
                            Hello,<br>Sign in</a><span>
                </div>
            </div>

        </div>

    </div>
    <div class="container-nav">
        <ul>
            <li><a href="../pages/gift-card-nav.php">GIFT CARD</a></li>
            <li> <a href="../pages/subscriptions.php">SUBSCRIPTION</a></li>
            <li> <a href="#">MOBILE GAMES TOPUP</a></li>
            <li> <a href="#">TIKTOK COINS</a></li>
            <li> <a href="#">GAMING GEARS</a> </li>
            <li> <a href="#">FREE FIRE TOPUP</a> </li>
            <img src="../assets/images/topup-gif.gif" alt="" srcset="">

        </ul>
        <div class="nav-gif">
        </div>
    </div>