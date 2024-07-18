<?php
include 'config.php';
$admin = new Admin();
$cid = $_SESSION['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/profile-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:57 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>REPAIR ME</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>
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
    <style>
    .track-line {
      height: 2px !important;
      background-color: #488978;
      opacity: 1;
    }

    .dot {
      height: 10px;
      width: 10px;
      margin-left: 3px;
      margin-right: 3px;
      margin-top: 0px;
      background-color: #488978;
      border-radius: 50%;
      display: inline-block
    }

    .big-dot {
      height: 25px;
      width: 25px;
      margin-left: 0px;
      margin-right: 0px;
      margin-top: 0px;
      background-color: #488978;
      border-radius: 50%;
      display: inline-block;
    }

    .big-dot i {
      font-size: 12px;
    }

    .card-stepper {
      z-index: 0
    }
  </style>
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
                <h2 class="breadcrumb-title">Track</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Track</li>
                </ul>
            </div>
        </div>
<?php
$stmt=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="user-profile-sidebar">
                            <div class="user-profile-sidebar-top">
                                <div class="user-profile-img">
                                    <img src="controller/<?php echo $row['c_image']?>" alt="" style="width: 100px;height:100px">
                                    
                                </div>
                                <h5><?php echo $row['c_name']?></h5>
                             
                            </div>
                            <ul class="user-profile-sidebar-list">
                                <li><a href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                                <li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
                                <li><a class="active" href="track.php"><i class="far fa-layer-group"></i> Track</a></li>
                                <li><a href="controller/logout.php"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="user-profile-card profile-ad">
                                <div class="user-profile-card-header">
                                    <h4 class="user-profile-card-title">Your Orders With Us</h4>
                                   
                                </div>
                                <div class="col-lg-12">
                                   

                                <div class="col-12 col-md-12">
          <?php
          $stmt2 = $admin->ret("SELECT * FROM `booking`    WHERE `c_id`='$cid' GROUP BY booking.unid ");
          while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {

            $unid = $row['unid'];
            $b_status = $row['b_status'];

          ?>
            <!-- recent activity section -->
            <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
              <!-- title section -->
             
              <!-- dashboard section -->
              <div class="p-3">
                <div class="row g-0">
                  <?php
                  $stmt4 = $admin->ret("SELECT * FROM `order` INNER JOIN `service` ON service.serv_id=order.serv_id WHERE order.c_id='$cid' AND order.unid='$unid'");
                  while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
                    $qty = $row4['or_qty'];
                    $price = $row4['serv_price'];
                    $total = $qty * $price;

                  ?>
                    <div class="col-12 col-lg-12 mb-3">
                      <div class="border px-3">
                        <div class="row g-0 align-items-center">

                          <div class="col-12 col-md-6 col-lg-6">
                            <p class="mb-0 font-small mb-3"><?php echo $row4['serv_name'] ?></p>
                            <span class="text-muted font-small">Quantity: <?php echo $row4['or_qty'] ?></span>
                          </div>
                          <div class="col-12 col-md-12 col-lg-4 text-lg-end text-start text-md-start">
                            <div class="d-flex flex-column font-small">
                              <span class="theme-text-primary mb-3">₹ <?php echo $row4['serv_price'] ?></span>
                              <span class="text-muted font-small">Total: <span class="text-success">₹ <?php echo $total ?></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <!-- repetable -->
                </div>
              </div>
              <!-- track proces -->

              <section class="vh-100" style="margin-top: -300px;">
                <div class="container h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                      <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                        <?php if ($b_status == 'booking_accepted') { ?>
                          <span class="dot"></span>
                          <hr class="flex-fill "><span class="dot"></span>
                          <hr class="flex-fill "><span class="dot"></span>
                          <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                            <i class="fa fa-check text-white"></i></span>
                        <?php } ?>
                      </div>
                      <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                        <?php if ($b_status == 'Ready_For_Service') { ?>
                          <span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill "><span class="dot"></span>
                          <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                            <i class="fa fa-check text-white"></i></span>
                        <?php } ?>
                      </div>
                      <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                        <?php if ($b_status == 'Service_Going_On') { ?>
                          <span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                            <i class="fa fa-check text-white"></i></span>
                        <?php } ?>
                      </div>
                      <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                        <?php if ($b_status == 'Service_Completed') { ?>
                          <span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="d-flex justify-content-center align-items-center big-dot dot">
                            <i class="fa fa-check text-white"></i></span>
                        <?php } ?>
                      </div>

                      <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start"><span>Booked Service</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center"><span>Ready To Service</span></div>
                        <div class="d-flex flex-column justify-content-center align-items-center"><span>Service Going On</span></div>
                        <div class="d-flex flex-column align-items-center"><span>Service Completed</span></div>
                      </div>





                    </div>
                  </div>
                </div>
              </section>


              <div class="d-flex flex-column p-3" style="margin-top: -240px;">


                <?php if ($b_status == 'booking_accepted') { ?>
                  <a href="#" class="font-small  mb-3 btn btn-success w-25">Booking Accepted</a>

             <?php }elseif($b_status=='cancelled'){ ?>
                <a href="#" class="font-small  mb-3 btn btn-danger w-25">Booking Cancelled</a>
<?php }elseif($b_status=='pending'){ ?>
    <a type="button" class="btn btn-danger btn-rounded w-25 " href="controller/update_status.php?cancel=<?php echo $row['unid'] ?> & c_id=<?php echo $row['c_id'] ?>">Cancel </a>
    <?php }elseif($b_status=='Service_Completed'){ ?>
        <a type="button" class="btn btn-success btn-rounded w-25 " href=""   data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
  data-mdb-whatever="@mdo">Give Feedback </a>
        <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="controller/feedback.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="msg"></textarea>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" name="feed" class="btn btn-primary">Send message</button>
      </div>
      </form>
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
                                <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#ec85828a83ac89948d819c8089c28f8381"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="3f565159507f5a475e524f535a115c5052">[email&#160;protected]</span></a></li>
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
    </footer> -->
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
    <script src="assets/js/main.js"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</body>

<!-- Mirrored from live.themewild.com/motex/profile-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:57 GMT -->

</html>