<?php
include "dashboard.php";
?>
<?php
include "../../../backend/config/connection.php";
$stmt = "SELECT * FROM orders where order_status = 'pending'";
$response = mysqli_query($connect, $stmt);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .main-container {
        width: 100%;
        margin-top: 40px;
        margin-left: 195px;

        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
    }

    table {
        border-collapse: collapse;
    }

    table thead {

        margin-right: 40px;
        background-color: #F6F9FC;
    }

    table thead th {
        padding: 5px 6px;
        text-align: center;
        vertical-align: middle;
        font-family: sans-serif;
        font-weight: lighter;
        font-size: 1.3rem;
        color: #212529;
    }

    table tbody td {
        font-size: 1rem;
    }

    tbody tr td {
        text-align: center;
        vertical-align: middle;
    }

    table td {
        padding: 10px 40px;
    }

    table tbody tr:hover {
        background-color: #dcf0fa;
    }

    .order_status {
        background-color: #f7cb73;
        color: #FFFFFF;
        font-size: 1rem;
        border: none;
        padding: 4px;
        border-radius: 3px;

    }

    table .order_id {
        text-align: center;
        vertical-align: middle;

    }

    table .order_id {
        text-align: center;
        vertical-align: middle;
    }

    tbody td a button {
        background-color: crimson;
        color: #FFFFFF;
        border: none;
        border-radius: 3px;
    }

    tbody td a .complete {
        background-color: green;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1 style="text-align: center; color:crimson;">Pending Orders</h1>
        <table>
            <tr>
                <thead>
                    <th class="order_id">Order No</th>
                    <th>Date</th>
                    <th>Payment Gateway</th>
                    <th>OrderStatus</th>
                    <th>Purchase Date</th>
                    <th class="action">Action</th>

                </thead>
            </tr>



            <?php if (mysqli_num_rows($response) > 0) { ?>

                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($response)) { ?>

                        <tr>



                            <td><?php echo $oderid = '#' . 6000 . $row['order_id']; ?></td>
                            <td><?php echo $row['purchase_date']; ?></td>
                            <td><?php echo  $row['payment_method']; ?></td>
                            <td><span class="order_status"><?php echo $oderid =  $row['order_status']; ?></span></td>
                            <td><?php echo  $row['purchase_date']; ?></td>
                            <td><a href="../../../backend/functions/updateOrderStatus.php?id=<?php echo $row['order_id']; ?>"><button class="complete">Complete</button></a> </td>
                            <td><a href="../../../backend/functions/cancelOrder.php?id=<?php echo $row['order_id']; ?>"><button>Cancel</button></a>
                            </td>
                        </tr>
                <?php }
                } else {
                    echo "NO ORDER YET MAKE YOU FIRST ORDER";
                } ?>
                </tbody>

        </table>
    </div>

</body>

</html>