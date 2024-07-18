<?php
include 'config.php';
$admin=new Admin();
if(!isset($_SESSION['aid'])){
header('location:login.php');
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
       
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-1 pb-3">
            <?php
                include 'sidebar.php'
            ?>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           <?php
            include 'navbar.php'
        ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
          <!--   <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                  <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Staff</h6>
                            <form action="controller/add_staff.php" method="POST" enctype="multipart/form-data">
                                 <div class="mb-3">
                                    <label for="inputEmail3" class="col col-form-label">Category</label>
                                    <div class="">
                                       <select class="form-select mb-3" aria-label="Default select example" name="category">
                                <option selected>Select Category</option>
                                <?php
                                $stmt=$admin->ret("SELECT * FROM `serv_category`");
                                while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                        
                                


                                ?>
                                <option value="<?php echo $row['cat_id']?>"><?php echo $row['cat_name'];   ?></option>

                            <?php }
                             ?>
                                
                            </select>
                                    </div>
                                   
                                </div>
                                 
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Enter the Staff name</label>
                                   <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required name="staff">
                                   
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Enter phone number</label>
                                    <input type="tel" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required name="phone">
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required name="email">
                                    
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required name="address">
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required name="img">
                                </div>
                                

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Salary</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" required name="sal">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" required name="pass">
                                </div>
                               
                                <button type="submit" class="btn btn-primary" required name="addstaff">ADD</button>
                            </form>
                        </div>
            </div>
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