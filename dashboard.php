<?php 
include 'config.php';
$admin=new Admin();
$cid=$_SESSION['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:53 GMT -->

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
        <!-- <div class="loader-ripple">
            <div></div>
            <div></div>
        </div> -->
    </div>


   <?php include 'navbar.php' ?>

    <main class="main">

        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Dashboard</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
        </div>
<?php 
$stmt=$admin->ret("SELECT * FROM `customer`  WHERE  `c_id`='$cid'");
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
                                <li><a class="active" href="dashboard.html"><i class="far fa-gauge-high"></i> Dashboard</a></li>
                                <li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
                                <li><a href="track.php"><i class="far fa-truck"></i>Track</a></li>
                                <li><a href="controller/logout.php"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-profile-card">
                                        <h4 class="user-profile-card-title">Recent Listing</h4>
                                        <div class="table-responsive">
                                        <div class="row g-0">
              <div class="col-12 col-lg-6">
                <div class="d-flex flex-column p-3">
                  <span class="small fw-bold">Personal Information</span>
                  <span class="small fw-normal"><?php echo $row['c_name']?></span>
                  <span class="small fw-bold mt-3">Email Address</span>
                  <span class="small fw-normal"><?php echo $row['c_email']?></span>
                  <span class="small fw-bold mt-3">Mobile Number</span>
                  <span class="small fw-normal"><?php echo $row['c_phone']?></span>
                  <span class="small fw-bold mt-3">Address</span>
                  <span class="small fw-normal"><?php echo $row['c_address']?></span>
                </div>
              </div>
          
            </div>
                                        </div>
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

<!-- Mirrored from live.themewild.com/motex/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:54 GMT -->

</html>