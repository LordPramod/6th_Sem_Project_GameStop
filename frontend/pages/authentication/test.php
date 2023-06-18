<?php
include "../../../backend/config/connection.php";

$query = "SELECT * FROM products_details";
$respone = mysqli_query($connect, $query);


while ($row = mysqli_fetch_assoc($GLOBALS['respone'])) { ?>
    <table border='1'>
        <tr>
            <th>
                <?php echo $row['pdt_name']; ?>

            </th>
            <th>
                <?php echo $row['pdt_price']; ?>

            </th>
        </tr>
    </table>
<?php } ?>