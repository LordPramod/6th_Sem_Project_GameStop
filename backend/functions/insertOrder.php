<?php
include "../config/connection.php";
session_start();
$user_id = $_SESSION['id'];

$stmt_cart = "select user_info.id,product_name,pdt_cart.pdt_id,product_quantity,total_amount,image,checkout_detail.Cemail,checkout_detail.Ccity,checkout_detail.Caddress from pdt_cart join user_info on pdt_cart.user_id = user_info.id join checkout_detail on checkout_detail.Uid = user_info.id where user_info.id=$user_id";
$response = mysqli_query($connect, $stmt_cart);

while ($row = mysqli_fetch_assoc($response)) {
    $pdt_name = $row['product_name'];
    $quantity = $row['product_quantity'];
    $total = $row['total_amount'];
    $product_image = $row['image'];
    $email = $row['Cemail'];
    $city = $row['Ccity'];
    $address = $row['Caddress'];
    $pdt_id = $row['pdt_id'];
    $order_status = 'pending';
    $payment_method = $_POST['payment-method'];

    if (isset($_GET['data'])) {
        $payment_method = "Esewa";
        $stmt_esewa = "INSERT INTO orders (user_id,product_name,quantity,total,order_status,payment_method,email,city,address,product_image,product_id)VALUES('$user_id','$pdt_name','$quantity','$total','$order_status','$payment_method','$email','$city','$address','$product_image','$pdt_id')";
        $esewa_reponse = mysqli_query($connect, $stmt_esewa);
        $delete_cart = "DELETE FROM pdt_cart where user_id = $user_id";
        $delete_response = mysqli_query($connect, $delete_cart);
        if ($delete_response) {
            header("location:../../frontend/pages/orderConfirmation.php");
        }
    }


    if ($payment_method == '1') {
        $sum_amount = "SELECT SUM(total_amount) as totalamount FROM pdt_cart WHERE user_id = $user_id;";
        $sum_response = mysqli_query($connect, $sum_amount);
        while ($sum_row = mysqli_fetch_assoc($sum_response)) {
            $total = $sum_row['totalamount'];
        }
        $amount = "$total";
        $transaction_uuid = bin2hex(random_bytes(20));
        $product_code = "EPAYTEST";
        $secret_key = '8gBm/:&EnhH.1/q';
        $message = 'total_amount=' . $amount . ',transaction_uuid=' . $transaction_uuid . ',product_code=' . $product_code;
        $signature = base64_encode(hash_hmac('sha256', $message, $secret_key, true));


?>

        <body>
            <form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST" id="esewa" hidden>
                <input type="text" id="amount" name="amount" value="<?php echo ($amount) ?>" required>
                <input type="text" id="tax_amount" name="tax_amount" value="0" required>
                <input type="text" id="total_amount" name="total_amount" value="<?php echo ($amount) ?>" required>
                <input type="text" id="transaction_uuid" name="transaction_uuid" value=<?php echo ($transaction_uuid) ?>
                    required>
                <input type="text" id="product_code" name="product_code" value="EPAYTEST" required>
                <input type="text" id="product_service_charge" name="product_service_charge" value="0" required>
                <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
                <input type="text" id="success_url" name="success_url"
                    value="http://localhost/gamestop/backend/functions/insertOrder.php" required>
                <input type="text" id="failure_url" name="failure_url" value="https://google.com" required>
                <input type="text" id="signed_field_names" name="signed_field_names"
                    value="total_amount,transaction_uuid,product_code" required>
                <input type="text" id="signature" name="signature" value=<?php echo ($signature) ?> required>
                <input value=" Submit" type="submit">
            </form>
            <script>
                document.getElementById('esewa').submit();
            </script>
        </body>

<?php
        //    else {
        //         $payment_method = "Cash On Delivery";
        //     }
        //     if (isset($_POST['payment-method'])) {
        //         $payment = $_POST['payment-method'];
        // if ($payment == 1) {
        //     $stmt_esewa = "INSERT INTO orders (user_id,product_name,quantity,total,order_status,payment_method,email,city,address,product_image)VALUES('$user_id','$pdt_name','$quantity','$total','$order_status','$payment_method','$email','$city','$address','$product_image')";
        //     $esewa_reponse = mysqli_query($connect, $stmt_esewa);
        //     $delete_cart = "DELETE FROM pdt_cart where user_id = $user_id";
        //     $delete_response = mysqli_query($connect, $delete_cart);
        // if ($esewa_reponse && $delete_response) {
        //     header("location:https://esewa.com.np/#/home");
        // } else {
        //     echo "<script> alert('Something went wrong')</script>";
        // }
    } elseif ($payment_method == "2") {
        $payment_method = "Cash On Delivery";
        $stmt_cod = "INSERT INTO orders (user_id,product_name,quantity,total,order_status,payment_method,email,city,address,product_image,product_id)VALUES('$user_id','$pdt_name','$quantity','$total','$order_status','$payment_method','$email','$city','$address','$product_image','$pdt_id')";
        $cod_reponse = mysqli_query($connect, $stmt_cod);
        $delete_cart = "DELETE FROM pdt_cart where user_id = $user_id";
        $delete_response = mysqli_query($connect, $delete_cart);
        if ($cod_reponse && $delete_response) {
            header("location:../../frontend/pages/orderConfirmation.php");
        } else {
            echo "<script> alert('Something went wrong')</script>";
        }
    }
}
// 
?>