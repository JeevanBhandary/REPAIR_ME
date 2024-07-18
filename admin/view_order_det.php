<?php
include 'config.php';
$admin = new Admin();
$unid = $_GET['unid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REPAIR ME</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="logo.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'sidebar.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'navbar.php' ?>

            <section class="h-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-10 col-xl-12">
                            <div class="card" style="border-radius: 10px;">
                           
                                <div class="card-header px-4 py-5">
                                    <h5 class="text-muted mb-0"> <span style="color: #a8729a;">BOOKING DETAILS</span></h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Booked Item</p>

                                    </div>
                                    <?php
                                    $g_total = 0;
                                    $stmt = $admin->ret("SELECT * FROM   `order`   INNER JOIN `service` ON service.serv_id=order.serv_id  WHERE order.unid='$unid' ");
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $quantity = $row['or_qty'];
                                        $price = $row['serv_price'];
                                        $g_total = $quantity * $price;
                                    ?>
                                        <div class="card shadow-0  mb-4">
                                            <div class="card-body">

                                                <div class="row">

                                                   
                                                    <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text  mb-0">Service Name: <?php echo $row['serv_name'] ?></p>
                                                    </div>
                                                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text mb-0 ">Service  Price: ₹<?php echo $row['serv_price'] ?></p>
                                                    </div>

                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text mb-0 ">Quantity: <?php echo $row['or_qty'] ?></p>
                                                    </div>

                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text mb-0 ">Total: ₹<?php echo $g_total  ?></p>
                                                    </div>

                                                </div>

                                                <!-- <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;"> -->
                                                <!-- <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text-muted mb-0 small">Track Order</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div class="progress-bar" role="progressbar"
                        style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                    </div>
                  </div>
                </div> -->
                                            </div>
                                        </div>

                                    <?php } ?>
                                     <?php
                                    
                                    $stmt = $admin->ret("SELECT * FROM `booking` INNER JOIN `order` ON order.unid=booking.unid  INNER JOIN `service` ON service.serv_id=order.serv_id WHERE order.unid='$unid' ");
                                   $row1=$stmt->fetch(PDO::FETCH_ASSOC);
                                
                                    ?>
                                        <div class="d-flex justify-content-between pt-2">
                                            <p class="fw-bold mb-0">Booking Details</p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $898.00</p> -->
                                        </div>

                                        <div class="d-flex justify-content-between pt-2">
                                            <p class="text-muted mb-0">Name : <?php echo $row1['b_name'] ?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p> -->
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="text-muted mb-0">Email : <?php echo $row1['b_email']?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p> -->
                                        </div>

                                        <div class="d-flex justify-content-between ">
                                            <p class="text-muted mb-0">Phone Number : <?php echo $row1['b_phone']?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                                        </div>
                                        
                                        <div class="d-flex justify-content-between ">
                                            <p class="text-muted mb-0">Address : <?php echo $row1['b_address']?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                                        </div>
                                          <div class="d-flex justify-content-between ">
                                            <p class="text-muted mb-0">Vehicle Number : <?php echo $row1['v_number']?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <p class="text-muted mb-0">Booking Date : <?php echo $row1['b_date']?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                                        </div>
                                        <div class="d-flex justify-content-between mb-5">
                                            <p class="text-muted mb-0">Bokking Time : <?php echo $row1['b_time']?></p>
                                            <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                                        </div>
                                </div>
                                <?php 
                                 $a_total=0;
                                $stmt3=$admin->ret("SELECT * FROM  `order` WHERE `unid`='$unid' ");
                                while($row3=$stmt3->fetch(PDO::FETCH_ASSOC)){
                                    $a_total+=$row3['or_total'];
                                }
                                ?>
                                <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                    <h3 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                                        Amount: <span class="h2 mb-0 ms-2"><?php echo  $a_total?></span></h3>
                                </div>
                            </div>
                     
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->


            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>