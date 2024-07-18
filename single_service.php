<?php 
include 'config.php';
$admin = new Admin();
$serv_id=$_GET['serv_id'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/inventory-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:41 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>REPAIR ME</title>

    <link rel="icon" type="image/x-icon" href="logo.jpej">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/flex-slider.min.css">
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
                <h2 class="breadcrumb-title">Single Service</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Single Service</li>
                </ul>
            </div>
        </div>

<?php 
$stmt=$admin->ret("SELECT * FROM `serv_category` INNER JOIN `service` ON serv_category.cat_id=service.cat_id WHERE service.serv_id='$serv_id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
        <div class="car-item-single bg py-120">
            <div class="container">
                <div class="car-single-wrapper">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="car-single-details">
                                <div class="car-single-widget">
                                    <div class="car-single-top">
                                        <h3 class="car-single-title"><?php echo $row['serv_name']?></h3>
                                        <ul class="car-single-meta">
                                            <li><i class="far fa-eye"></i> <?php echo $row['cat_name']?></li>
                                        </ul>
                                    </div>
                                    <div class="car-single-slider">
                                        <div class="item-gallery">
                                            <div class="flexslider-thumbnails">
                                                <ul class="slides">
                                                    <li data-thumb="assets/img/car/single-1.jpg">
                                                        <img src="admin/Controller/<?php echo $row['serv_image']?>"alt="#" style="width:800px;">
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="car-single-widget">
                                    <div class="car-single-overview">
                                        
                                    
                                        <h4 class="mb-4">Vehicle Services</h4>
                                        <div class="mb-4">
                                            
                                            
                                            <?php
                                            $ing = $row['serv_details'];
                                            $exing = explode(',', $ing);
                                            foreach ($exing as $value) {
                                                echo "
                            <ul class='car-single-list'>
                                <li ><i class='far fa-check-circle'></i>  $value</li>
                            </ul>";
                                            }

                                            ?>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="car-single-widget">
                                <h4 class="car-single-price">PRICE:  ₹ <?php echo $row['serv_price']?></h4>
                            
                                  
                                     <div class="d-flex align-items-center">
                                         <?php if(isset($_SESSION['cid'])){?>
                               <a href="controller/cart.php?serv_id=<?php echo $serv_id ?>"> <button type="submit" class="theme-btn" name="reg">Add Cart<i class="far fa-shopping-cart"></i></button></a>
                                 <?php }else{ ?>
                                                <a href="login.php" class="theme-btn"><span class="far fa-eye"></span>Add Cart</a>
                                                <?php } ?>
                            </div>
                            </div>
                           
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

    </main>

    <!-- <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo/logo-light.png" alt>
                            </a>
                            <p class="mb-3">
                                We are many variations of passages available but the majority have suffered alteration
                                in some form by injected humour words believable.
                            </p>
                            <ul class="footer-contact">
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                                <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                                <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#a7cec9c1c8e7c2dfc6cad7cbc289c4c8ca"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="8ee7e0e8e1ceebf6efe3fee2eba0ede1e3">[email&#160;protected]</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Update News</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Testimonials</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Our Dealers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Support Center</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Affiliates</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Booking Tips</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Sell Vehicles</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <button class="theme-btn" type="submit">
                                            Subscribe Now <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> MOTEX </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 -->
<?php include 'footer.php' ?>
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>


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
    <script src="assets/js/flex-slider.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from live.themewild.com/motex/inventory-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:53 GMT -->

</html>