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
        $checkifexist = mysqli_query($connect, "SELECT * FROM pdt_cart WHERE user_id = $user_id AND pdt_id = $product_id");


        if (mysqli_num_rows($checkifexist) > 0) {
            $row = mysqli_fetch_assoc($checkifexist);
            if ($row > 0) {
                $db_quantity = $row['product_quantity'];

                $db_quantity_final = $row['product_quantity'] + $product_quantity;
                $db_final_total_amount = $db_quantity_final * $product_price;
                $update_quantity = "UPDATE pdt_cart SET product_quantity = $db_quantity_final, total_amount = $db_final_total_amount WHERE user_id = $user_id AND pdt_id = $product_id";
                $update_response = mysqli_query($connect, $update_quantity);
                header("location:../../frontend/layouts/cart.php");
                die();
            }
        }
        ;

        $response = mysqli_query($connect, "Insert INTO pdt_cart (user_id , product_name , product_price , product_quantity , total_amount,pdt_id,image) VALUES 
        ('$user_id','$product_name','$product_price','$product_quantity','$total','$product_id','$product_image')");
        header("location:../../frontend/layouts/cart.php");
    }
} else {
    header("location:../../frontend/pages/authentication/login.php");
    echo "<script>alert('Please Login First');</script>";
}
