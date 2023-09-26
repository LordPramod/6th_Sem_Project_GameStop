<?php
include "../../backend/config/connection.php";
session_start();
if (isset($_SESSION['name'])) {

    if (isset($_POST['addCart'])) {
        $stmt = mysqli_query($connect, "SELECT * FROM products_details");

        $user_id = $_SESSION['id'];
        $product_name = $_POST['Pproduct'];
        $product_image = $_POST['Pimage'];
        $product_price = $_POST['Pprice'];
        $product_id = $_POST['Pid'];
        $product_quantity = $_POST['Pamount'];
        $total = $product_price * $product_quantity;
        $response = mysqli_query($connect, "Insert INTO pdt_cart (user_id , product_name , product_price , product_quantity , total_amount,pdt_id,image) VALUES 
        ('$user_id','$product_name','$product_price','$product_quantity','$total','$product_id','$product_image')");
        header("location:../../frontend/layouts/cart.php");
    }
} else {
    header("location:../../frontend/pages/authentication/login.php");
    echo "<script>alert('Please Login First');</script>";
}
