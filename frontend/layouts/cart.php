<?php
include "./nav-bar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>
    #img {
        width: 100px;
        height: 100px;
    }
</style>

<body>
    <section class="vh-100" style="background-color: #F2F2F2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <p><span class="h2">Shopping Cart </span><span class="h4">(items in your cart)</span></p>

                    <div class="card mb-4">
                        <div class="card-body p-4">

                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="../assets/images/google-gift-card-50.png" class="img-fluid" alt="Google Gift Card" id="img">
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Name</p>
                                        <p class="lead fw-normal mb-0"></p>
                                    </div>
                                </div>
                                <!-- <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Color</p>
                                        <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #fdd8d2;"></i>
                                            pink rose</p>
                                    </div>
                                </div> -->
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Quantity</p>
                                        <p class="lead fw-normal mb-0"></p>
                                        <input type="number" name="" id="" value="1">
                                        <a class="edit-btn" href="#">Edit</a>

                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Price</p>
                                        <p class="lead fw-normal mb-0"></p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Total</p>
                                        <p class="lead fw-normal mb-0"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="card-body p-4">

                            <div class="float-end">
                                <p class="mb-0 me-5 d-flex align-items-center">
                                    <span class="small text-muted me-2">Order total:</span> <span class="lead fw-normal">$799</span>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
                        <button type="button" class="btn btn-primary btn-lg">Add to cart</button>
                    </div>
                    <a class="btn-remove" href="#">Remove</a>

                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php
include "./footer.php";
?>