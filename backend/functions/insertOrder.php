<?php
include "../config/connection.php";
session_start();
$user_id = $_SESSION['id'];

$stmt_cart = "select user_info.id,product_name,product_quantity,total_amount,image,checkout_detail.Cemail,checkout_detail.Ccity,checkout_detail.Caddress from pdt_cart join user_info on pdt_cart.user_id = user_info.id join checkout_detail on checkout_detail.Uid = user_info.id where user_info.id=$user_id";
$response  = mysqli_query($connect, $stmt_cart);
// $row = mysqli_fetch_assoc($response);
while ($row = mysqli_fetch_assoc($response)) {
    $pdt_name = $row['product_name'];
    $quantity = $row['product_quantity'];
    $total = $row['total_amount'];
    $product_image = $row['image'];
    $email = $row['Cemail'];
    $city = $row['Ccity'];
    $address = $row['Caddress'];
    $order_status = 'pending';
    if (!isset($_POST['payment-method'])) {
        echo "Please Select payment metohd";
        exit();
    }

    $payment_method =  $_POST['payment-method'];
    if ($payment_method == 1) {
        $payment_method = "Esewa";
    } else {
        $payment_method = "Cash On Delivery";
    }
    if (isset($_POST['payment-method'])) {
        $payment = $_POST['payment-method'];
        if ($payment == 1) {
            $stmt_esewa = "INSERT INTO orders (user_id,product_name,quantity,total,order_status,payment_method,email,city,address,product_image)VALUES('$user_id','$pdt_name','$quantity','$total','$order_status','$payment_method','$email','$city','$address','$product_image')";
            $esewa_reponse = mysqli_query($connect, $stmt_esewa);
            $delete_cart = "DELETE FROM pdt_cart where user_id = $user_id";
            $delete_response = mysqli_query($connect, $delete_cart);
            if ($esewa_reponse && $delete_response) {
                header("location:https://esewa.com.np/#/home");
            } else {
                echo "<scritp> alert('Something went wrong')</script>";
            }
        } else {
            $stmt_esewa = "INSERT INTO orders (user_id,product_name,quantity,total,order_status,payment_method,email,city,address,product_image)VALUES('$user_id','$pdt_name','$quantity','$total','$order_status','$payment_method','$email','$city','$address','$product_image')";
            $esewa_reponse = mysqli_query($connect, $stmt_esewa);
            $delete_cart = "DELETE FROM pdt_cart where user_id = $user_id";
            $delete_response = mysqli_query($connect, $delete_cart);
            if ($esewa_reponse && $delete_response) {
                header("location:../../frontend/pages/orderConfirmation.php");
            } else {
                echo "<scritp> alert('Something went wrong')</script>";
            }
        }
    }
}