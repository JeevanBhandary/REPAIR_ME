
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

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
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
            <!-- Navbar End -->


        
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
           
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Sales</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                   <th>SL.NO</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">AMOUNT</th>
                                    <th scope="col">BOOKING DATE</th>
                                    <th scope="col">BOOKING TIME</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">VIEW DETAILS</th>
                                
                                </tr>
                            </thead>
       
           
                            <tbody>
                                   <?php 
                                   $i=1;
                                    $sum = 0;
                                   $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `booking` ON booking.unid=order.unid INNER JOIN `payment` ON payment.unid=booking.unid  GROUP BY booking.unid DESC ");
                                   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                    $unid=$row['unid'];
                                    $stmt1=$admin->ret("SELECT * FROM `order` WHERE `unid`='$unid'");
                                    while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
                                        $sum=$sum+$row1['or_total'];
                                    }
                                   ?>
                                    <tr>
                                    <?php if($sum > 0){?>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $row['b_name']?></td>
                                        <td><?php echo $sum?></td>
                                        <td><?php echo $row['b_date']?></td>
                                        <td><?php echo $row['b_time']?></td>
                                        <td> 
   
                                                  
                                                   
                                        <?php if($row['b_status']=='pending'){?>
                                    <a type="button" class="btn btn-info btn-rounded btn-fw" href="controller/update_status.php?update_order_status=<?php echo $row['unid'] ?>&c_id=<?php echo $row['c_id'] ?>">Accept Booking</a>
                                    <a type="button" class="btn btn-danger btn-rounded btn-fw" href="controller/update_status.php?cancel=<?php echo $row['unid'] ?>&c_id=<?php echo $row['c_id'] ?>">Cancel </a>
                                    <?php } elseif ($row['b_status'] == 'booking_accepted') { ?>
                                 <a href="controller/update_status.php?booking_accepted=<?php echo $row['unid'] ?> & c_id=<?php echo $row['c_id'] ?>" type="button" class="btn btn-primary btn-rounded btn-fw">Ready For Service</a> 

                                 <?php } elseif ($row['b_status'] == 'Ready_For_Service') { ?>
                               <a href="controller/update_status.php?Ready_For_Service=<?php echo $row['unid'] ?> & c_id= <?php echo $row['c_id'] ?>" type="button" class="btn btn-warning btn-rounded btn-fw">Service Going On</a>
                                    <?php } elseif ($row['b_status'] == 'Service_Going_On') { ?>
                                        <a href="controller/update_status.php?Service_Going_On=<?php echo $row['unid'] ?> & c_id= <?php echo $row['c_id'] ?>" type="button" class="btn btn-warning btn-rounded btn-fw">Service Completed</a>
                                        <?php } elseif($row['b_status']=='Service_Completed'){  ?>
                                        <a type="button" class="btn btn-info btn-rounded btn-fw" href="generate_bill.php?unid=<?php echo $row['unid'] ?>&c_id=<?php echo $row['c_id'] ?>">Generate Bill</a>
                                        <?php }elseif ($row['b_status']=='cancelled'){ ?>
                                            <a type="button" class="btn btn-danger btn-rounded btn-fw" href="">Cancelled</a>
                                            <?php } ?>                        
                                                 
                                    </td>
                                   
                                   




                                    
                                    <td class="d-flex justify-content-center"><a href="view_order_det.php?unid=<?php echo $row['unid']?>"><button type="button" class="btn btn-square btn-success m-2"><i class="fa fa-eye"></i></button></a></td>
                                  
                                    
                                </tr>
                               <?php } ?>
                               <?php   $sum = 0; }  ?> 
                            </tbody>
                            

                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->



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