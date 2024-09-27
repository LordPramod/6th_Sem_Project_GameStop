<?php
include '../pages/admin/dashboard.php';
include "../../backend/config/connection.php";
$stmt = "SELECT * FROM pdt_category";
$response = mysqli_query($connect, $stmt);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .category-container {
            border: 4px solid red;
            width: 1200px;
            margin: 80px auto;
            display: flex;
            flex-wrap: wrap;
        }

        h1 {
            text-align: center;
        }

        .contain-container img {
            width: 200px;
            height: 300px;
            margin: 0 auto;
            padding: 20px;
<<<<<<< HEAD
=======
            display: flex;

>>>>>>> b268b30 (Added Php Mailer Changed Login Page)
        }


        .contain-container {
            border: 2px solid green;

<<<<<<< HEAD
=======
            margin: 0 0 30px 30px;




>>>>>>> b268b30 (Added Php Mailer Changed Login Page)

        }

        .contain-container h5 {
            text-align: center;
<<<<<<< HEAD
=======



>>>>>>> b268b30 (Added Php Mailer Changed Login Page)
        }
    </style>
</head>

<body>

    <h1>Category</h1>
    <div class="category-container">

        <?php while ($row = mysqli_fetch_assoc($response)) { ?>
            <div class="contain-container">


                <!-- <td><?php echo $row['C_id']; ?></td> -->
<<<<<<< HEAD
                <img src="../assets//images/<?php echo $row['products_category_image']; ?>" alt="" srcset="">
=======
                <img src="../assets//images/<?php echo $row['product_category_image']; ?>" alt="" srcset="">
>>>>>>> b268b30 (Added Php Mailer Changed Login Page)
                <h5><?php echo $row['pdt_category_name']; ?> </h5>
            </div>
        <?php } ?>

    </div>
</body>

</html>