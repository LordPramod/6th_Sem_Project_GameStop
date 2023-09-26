<?php

include "./dashboard.php";
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        margin-left: 200px;
        width: 1200px;
    }

    #addProducts {}

    .addProducts {
        margin-bottom: 40px;
        display: flex;
    }

    .addProducts a {
        background-color: #111111;
        text-align: end;
        margin-left: 800px;
        border-radius: 10px;

        color: #FFFFFF;
    }

    .addProducts a:hover {
        background-color: crimson;
        color: #111111;
    }

    .addProducts h2 {
        margin: auto;
        color: crimson;
    }
    </style>
</head>

<body>

    <div class="container center-text mt-3">
        <div class="addProducts">
            <h2>Products</h2>

            <a href="./product/index.php" class="text-decoration-none  fs-4 fw-bold px-5" id="addProducts">Add
                Product</a>
        </div>

        <table class="table table-hover ">
            <thead class="" style="background-color: crimson;">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../../../backend/config/connection.php";
                $stmt = "SELECT * FROM products_details ";
                $response = mysqli_query($connect, $stmt);
                $i = 1;
                while ($row = mysqli_fetch_assoc($response)) { ?>

                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $row['pdt_name']; ?></td>
                    <td><?php echo $row['pdt_price']; ?></td>
                    <td><img src="../../assets/images/<?php echo $row['product_image']; ?>" alt="" srcset=""
                            height="100px" width="200px">
                    </td>
                    <td><a href=""><input type="button" value="Update"></a>
                    <td><a href="./product/deleteproduct.php?id=<?php echo $row['id']; ?>"><input type="submit"
                                value="Delete" name="delete"></a></td>

                </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>