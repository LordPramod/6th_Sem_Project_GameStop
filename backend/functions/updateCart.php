<?php
// Database Connection
include '../config/connection.php';
session_status();
$id = $_GET['id'];

$stmt1 = mysqli_query($connect, "SELECT * FROM pdt_cart where cart_id = '{$id}'");
$cart_stmt = mysqli_query($connect, "SELECT * FROM pdt_cart ");
$row = mysqli_fetch_assoc($cart_stmt);
// echo $row['cart_id'];
// echo $stmt1;
// Deletion 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $total = $quantity * $row['product_price'];
    // echo "<script> var quantity = prompt('Enter new quantity '); 
    $stmt = mysqli_query($connect, "UPDATE pdt_cart SET product_quantity=$quantity, total_amount=$total where cart_id=$id");
    header("location: ../../frontend/layouts/cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-quantity">

        <form action="updateCart.php" method="post">
            <label for="Quantity">Quantity</label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="quantity" id="" placeholder="Enter New Quantity">
            <br>
            <input type="submit" value="Update" name="update">
        </form>
    </div>
</body>

</html>