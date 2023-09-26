<?php
include "../dashboard.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/addproduct.css">
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
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="Pname"
                            placeholder="Enter Product Name" />
                    </div>
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example2cg">Product Price</label>
                        <input type="text" id="form3Example2cg" class="form-control form-control-lg" name="Pprice"
                            placeholder="Enter Product Price" />
                    </div>
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example3cg">Product Image</label>
                        <input type="file" id="form3Example3cg" class="form-control form-control-lg" name="Pimage"
                            placeholder="Add Product Image" enctype="multipart/form-data" />
                    </div>
                    <div class="form-outline mb-2" id="form-outline">
                        <label class="form-label" for="form3Example4cg">Product Category</label>
                        <select name="Pages" id="" class="form-select ">
                            <option value="1">Gift Cards</option>
                            <option value="2">iTunes Gift Cards</option>
                            <option value="3">PlayStation Subsctiption</option>
                            <option value="4">Free Fire Topup Login</option>
                            <option value="5">Nintendo Topup </option>
                            <option value="6">Mobile Legends Diamonds</option>
                            <option value="7">Xbox Live Gift Card</option>
                            <option value="8">Steam Gift Card</option>
                        </select>
                        <input type="submit" value="Upload" name="upload" class=" form-control fs-4 my-3" id="upload">
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>