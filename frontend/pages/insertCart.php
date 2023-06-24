<?php
if (isset($_POST['addCart'])) {

    session_start();
    $product_name = $_POST['Pproduct'];
    $product_price = $_POST['Pprice'];
    $product_quantity = $_POST['Pamount'];
    $_SESSION['cart'][] = array(
        'ProductName' => $product_name, 'ProductPrice ' => $product_price, 'ProductQuanity' => $product_price
    );
    header("location:../layouts/cart.php");
}
