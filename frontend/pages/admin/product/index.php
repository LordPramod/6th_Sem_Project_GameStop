<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css"> -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border mt-3">
                <div class="mb-3 text-center">
                    <h1>Product Details</h1>
                </div>
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example1cg">Product Name</label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="Pname" placeholder="Enter Product Name" />
                    </div>
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example2cg">Product Name</label>
                        <input type="text" id="form3Example2cg" class="form-control form-control-lg" name="Pprice" placeholder="Enter Product Price" />
                    </div>
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example3cg">Product Image</label>
                        <input type="file" id="form3Example3cg" class="form-control form-control-lg" name="Pimage" placeholder="Add Product Image" enctype="multipart/form-data" />
                    </div>
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4cg">Product Category</label>
                        <select name="Pages" id="" class="form-select ">
                            <option value="0">Zero</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input type="submit" value="Upload" name="upload" class=" form-control fs-4 my-3">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="container center-text mt-3">

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../../../../backend/config/connection.php";
                $stmt = "SELECT * FROM pdt_table ";
                $response = mysqli_query($connect, $stmt);
                while ($row = mysqli_fetch_assoc($response)) { ?>

                    <tr>
                        <th scope="row"><?php echo $row['pdt_id']; ?></th>
                        <td><?php echo $row['pdt_name']; ?></td>
                        <td><?php echo $row['pdt_price']; ?></td>
                        <td><img src="../../../assets/images/<?php echo $row['pdt_image']; ?>" alt="" srcset="" height="100px" width="200px"></td>
                        <td></td>
                        <td></td>
                    </tr>

                <?php }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>