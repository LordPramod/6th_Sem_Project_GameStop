<?php
include "../../../../backend/config/connection.php";
if (isset($_POST["upload"]) && isset($_FILES['Pimage'])) {
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $product_category = $_POST['Pages'];
    $filename = $product_image['name'];
    $tmp_name = $product_image['tmp_name'];
    $file = "../../../assets/images/uploads/" . $filename;
    echo $filename;
    move_uploaded_file($tmp_name, $file);
    $stmt = "INSERT INTO pdt_table (pdt_name ,pdt_price,pdt_image,ptd_category) VALUES ('$product_name','$product_price','$filename','$product_category')";
    $response = mysqli_query($connect, $stmt);
    if ($response) {
        echo "<script> alert(Product Insertion Succesfully)</script>";
        header("location:./index.php");
    } else {
        echo "Product Insertion Failed";
    }
}
