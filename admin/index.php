<?php 
include 'config.php';
$admin=new Admin();
if(!isset($_SESSION['aid'])){
    header('location:signin.php');
}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      <?php include 'sidebar.php'?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'navbar.php'?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <?php $stmt=$admin->ret("SELECT COUNT(*) FROM `booking`");
                    $row=$stmt->fetch(PDO::FETCH_ASSOC); 
                    $b=implode($row) ?>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Bookings</p>
                                <h6 class="mb-0"><?php echo $b ?></h6>
                            </div>
                        </div>
                    </div>
                    <?php $stmt=$admin->ret("SELECT COUNT(*) FROM `customer`");
                    $row=$stmt->fetch(PDO::FETCH_ASSOC); 
                    $c=implode($row) ?>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Users</p>
                                <h6 class="mb-0"><?php echo $c ?></h6>
                            </div>
                        </div>
                    </div>
                    <?php $stmt=$admin->ret("SELECT COUNT(*) FROM `user`");
                    $row=$stmt->fetch(PDO::FETCH_ASSOC); 
                    $u=implode($row) ?>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total offline bookings</p>
                                <h6 class="mb-0"><?php echo $u ?></h6>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
           
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                   
                    <div class="col-sm-12 col-md-6 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Reminders</h6>
                              
                            </div>
                             <?php 
$stmt=$admin->ret("SELECT * FROM `service` WHERE `serv_qty` IS NOT NULL ");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    
if($row['serv_qty']<10){
?>
                            <div class="d-flex align-items-center border-bottom py-2">
                              
<div class="alert alert-warning alert-dismissible fade show col-md-12" role="alert">
  <strong><?php echo $row['serv_name']?></strong>: Your Stock is less than 10 .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

                            </div>
                           <?php } } ?>
                            
                         
                        </div>
                    </div>
                </div>

            </div>
            <!-- Widgets End -->

 <div class="col-12 mt-3">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Recent bookings</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL.NO</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">AMOUNT</th>
                                    <th scope="col">BOOKING DATE</th>
                                    <th scope="col">BOOKING TIME</th>
                                  <!--   <th scope="col">STATUS</th>
                                    <th scope="col">VIEW DETAILS</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                         $i=1;
                                    $sum = 0;
                                     $date = date("Y-m-d");
                                   $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `booking` ON booking.unid=order.unid INNER JOIN `payment` ON payment.unid=booking.unid WHERE  `or_date`='$date' GROUP BY booking.unid DESC  ");
                                   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                    $unid=$row['unid'];
                                    $stmt1=$admin->ret("SELECT * FROM `order` WHERE `unid`='$unid' ");
                                    while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
                                        $sum=$sum+$row1['or_total'];
                                    }
                                   ?>
                                        <tr>
                                            <td><?php echo $i++?></td>
                                        <td><?php echo $row['b_name']?></td>
                                        <td><?php echo $sum?></td>
                                        <td><?php echo $row['b_date']?></td>
                                        <td><?php echo $row['b_time']?></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div> -->
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>