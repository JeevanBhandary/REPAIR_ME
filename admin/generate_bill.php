<?php
include 'config.php';
$admin = new Admin();
$unid = $_GET['unid'];
$cid=$_GET['c_id'];
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
      <!-- Navbar End -->


      <!-- Sale & Revenue Start -->
      <div class="card" id='print'>
        <?php 
        $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `booking` ON booking.or_id=order.or_id INNER JOIN `payment` ON payment.or_id=order.or_id WHERE booking.unid='$unid' ");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        ?>
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong><?php echo $row['invoice']?></strong></p>
        </div>
        <div class="col-xl-3 float-end">
          <a class="btn btn-light text-capitalize border-0" onclick="printDiv('printableArea')" data-mdb-ripple-color="dark"><i
              class="fas fa-print text-primary"></i> Print</a>
        
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
          <a href="" class="navbar-brand  mb-1">
                    <h3 class="text-primary"><i class="fa fa-cogs me-3"></i>REPAIR ME</h3>
                </a>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">Name: <span style="color:#5d9fc5 ;"><?php echo $row['b_name']?></span></li>
              <li class="text-muted">Email: <span style="color:#5d9fc5 ;"><?php echo $row['b_email']?></span></li>
              <li class="text-muted">Phone: <span style="color:#5d9fc5 ;"><?php echo $row['b_phone']?></span></li>
              <li class="text-muted">Address: <span style="color:#5d9fc5 ;"><?php echo $row['b_address']?></span></li>
               <li class="text-muted">Vehicle Number: <span style="color:#5d9fc5 ;"><?php echo $row['v_number']?></span></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Invoice</p>
            <ul class="list-unstyled">
            
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Booked Date: </span><?php echo $row['or_date']?></li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Status:</span>
                  <?php if ($row['pay_method'] == 'upi') { ?>
                    <span class="badge bg-success text-black fw-bold">Paid</span>
                  <?php } elseif ($row['pay_method'] == 'card') { ?>
                    <span class="badge bg-success text-black fw-bold">Paid</span>
                    <?php }elseif ($row['pay_status']=='pending') { ?>
                      <span class="badge bg-danger text-black fw-bold">Not Paid</span>
                  <?php } elseif ($row['pay_status'] == 'paid') { ?>
                    <span class="badge bg-success text-black fw-bold">Paid</span>
                    <?php } ?></li>
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr>
                <th scope="col">Sl.No</th>
                <th scope="col">Service Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i=1;
              $total=0;
              $g_total=0;
              $stmt1=$admin->ret("SELECT * FROM `order` INNER JOIN `service` ON service.serv_id=order.serv_id  WHERE order.unid='$unid'");
              while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
                $price=$row1['serv_price'];
                $qty=$row1['or_qty'];
                $total=$price*$qty;
                $g_total=$g_total+$total;
              ?>
              <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><?php echo $row1['serv_name']?></td>
                <td>₹ <?php echo $row1['serv_price']?></td>
                <td><?php echo $row1['or_qty']?></td>
                <td>₹ <?php echo $total?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <p class="ms-3">Add additional notes and payment information</p>

          </div>
          <div class="col-xl-3">
            
            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                style="font-size: 25px;">₹ <?php echo $g_total?></span></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Thank you for your purchase</p>
          </div>
          <div class="col-xl-2">
                 
                  <?php if ($row['pay_method'] == 'upi') { ?>
                    <a type="button" class="btn btn-success btn-rounded btn-fw" href="">Paid</a>
                  <?php } elseif ($row['pay_method'] == 'card') { ?>
                    <a type="button" class="btn btn-success btn-rounded btn-fw" href="">Paid</a>
                    <?php }elseif ($row['pay_status']=='pending') { ?>
                    <a type="button" class="btn btn-danger btn-rounded btn-fw" href="controller/update_status.php?pay_bill=<?php echo $row['unid']?>&cid=<?php echo $row['c_id']?>">Not Paid</a>
                  <?php } elseif ($row['pay_status'] == 'paid') { ?>
                    <a type="button" class="btn btn-success btn-rounded btn-fw" href="">Paid</a>
                    <?php } ?>
                </div>
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

      <!-- Widgets End -->


      <!-- Footer Start -->

      <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>
<script>
  function printDiv(divName) {
     var printContents = document.getElementById('print').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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