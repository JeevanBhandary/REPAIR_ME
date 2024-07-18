<?php
include 'config.php';
$admin = new Admin();
$cid = $_SESSION['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:54:31 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>REPAIR ME</title>

    <link rel="icon" type="image/x-icon" href="logo.jpeg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>


    <?php include 'navbar.php' ?>




    <main class="main">

        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Shop Cart</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Shop Cart</li>
                </ul>
            </div>
        </div>


        <div class="shop-cart py-120" id="ajax_table">
            <div class="container">
                <div class="shop-cart-wrapper">
                    <div class="table-responsive">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>SL.NO</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $total = 0;
                                $garnd_total = 0;
                                $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `service` ON service.serv_id=cart.serv_id  WHERE cart.c_id='$cid'");
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $price = $row['serv_price'];
                                    $quantity = $row['qty'];
                                    $total = $price * $quantity;
                                    $garnd_total = $garnd_total + $total;
                                ?>
                                    <tr>
                                        <td>
                                            <div class="cart-img">
                                                <?php echo $i++ ?>
                                            </div>
                                        </td>
                                        <td>
                                            <h5> <?php echo $row['serv_name'] ?></h5>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <span>₹ <?php echo $row['serv_price'] ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-qty">
                                                <?php if ($row['qty'] > 1) { ?>
                                                    <button onclick="decrement(<?php echo $row['cart_id']; ?>)"><i class="fal fa-minus"></i></button>
                                                <?php } ?>
                                                <input type="text" value="<?php echo $row['qty'] ?>" disabled>
                                                <button onclick="increment(<?php echo $row['cart_id']; ?>)"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-sub-total">
                                                <span>₹ <?php echo $total ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="controller/delete_cart.php?cart_id=<?php echo $row['cart_id'] ?>" class="cart-remove"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="cart-footer">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">

                            </div>
                            <div class="col-md-6 col-lg-8">
                                <div class="cart-summary">
                                    <ul>

                                        <li class="cart-total"><strong>Total:</strong> <span>₹ <?php echo $garnd_total ?></span></li>
                                    </ul>
                                    <div class="text-end mt-40">
                                        <a href="checkout.php" class="theme-btn">Checkout Now<i class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php include 'footer.php' ?>


    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>

    <script>
        function increment(vcart_id) { //getting from onclick function -can use any variable
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //table id
                    document.getElementById("ajax_table").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "quantity_ajax.php ? cart_id_increment=" + vcart_id, true);
            xmlhttp.send();
        }
    </script>
    <script>
        function decrement(vcart_id) { //getting from onclick function -can use any variable

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //table id
                    document.getElementById("ajax_table").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "quantity_ajax.php ? cart_id_decrement=" + vcart_id, true);
            xmlhttp.send();
        }
    </script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from live.themewild.com/motex/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:54:31 GMT -->

</html>