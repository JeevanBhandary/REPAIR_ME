<?php
include 'config.php';
$admin = new Admin();
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
        <!--  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
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


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">View Staff</h6>
                    </div>
                    <form action="controller/staff_attendence.php" method="POST">
                        <div class="d-flex align-items-center justify-content-between mb-4 mt-2">
                            <button class="btn btn-primary" type="submit" name="att">Attendence</button>

                        </div>
                        <div class="table-responsive">

                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">SL.NO</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Staff Name</th>
                                        <th scope="col">Attendence</th>
                                        <th scope="col">Total Attendence</th>
                                        <th scope="col">Salary</th>
                                        <th scope="col">Total Salary</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $i = 1;
                                        $stmt = $admin->ret("SELECT * FROM `staff` INNER JOIN `serv_category` ON serv_category.cat_id=staff.cat_id");
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <td><?php echo $i++ ?></td>

                                            <td><?php echo $row['cat_name'] ?></td>
                                            <td><?php echo $row['s_name'] ?></td>

                                            <?php
                                            $s_id = $row['s_id'];
                                            $date = date("Y-m-d");
                                            $stmt1 = $admin->ret("SELECT * FROM `staff_attendence` WHERE `s_id`='$s_id' AND `sa_date`='$date' ");
                                            $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                                            $salary = $row['salary'];

                                            if ($row1) {
                                            ?>
                                                <td><?php echo $row1['sa_status'] ?></td>
                                            <?php } else { ?>

                                                <td>
                                                    <div class="container">
                                                        <input type="hidden" name="st_id" value="<?php echo $row['s_id'] ?>" id="">
                                                        <label>
                                                            <input type="radio" name="<?php echo $row['s_id'] ?>" required value="Present" />
                                                            <span>Present</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="<?php echo $row['s_id'] ?>" required value="Absent" />
                                                            <span>Absent</span>
                                                        </label>


                                                    </div>
                                                </td>

                                            <?php } ?>
                                            <td>
                                                <?php
                                                $total_salary = 0;
                                                $stmt1 = $admin->ret("SELECT * FROM `staff_attendence` WHERE `sa_status`='Present' AND `s_id`='$s_id'");
                                                $sa = $stmt1->rowCount();

                                                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {

                                                    $total_salary = $sa * $salary;
                                                }
                                                ?>
                                                <?php echo $sa ?>
                                            </td>
                                            <td><?php echo $row['salary'] ?></td>
                                            <td><a class="btn btn-sm btn-primary" href=""><?php echo $total_salary ?></a></td>

                                            <td><a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo $row['s_id'] ?>" data-whatever="@mdo">Reset</a>
                                               
                                            </td>

                                    </tr>
                                    <div class="modal fade" id="exampleModal<?php echo $row['s_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <form action="controller/staff_attendence.php" method="POST"> -->

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Attendence</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <input type="hidden" name="sid" value="<?php echo $row['s_id'] ?>" id="sid">
                                    <label>
                                        <input type="radio" name="st_id"  value="Present" id="check" onchange="store(event,<?php echo $row['s_id'] ?>)"/>
                                        <span>Present</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="st_id"  value="Absent" id="checq" onchange="store(event,<?php echo $row['s_id'] ?>)"/>
                                        <span>Absent</span>
                                    </label>


                                </div>

                            </div>
                           
                        <!-- </form> -->
                    </div>

                </div>
            </div>


                                <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </form>


                </div>
            </div>

            <?php
            $i = 1;
            $stmt = $admin->ret("SELECT * FROM `staff` INNER JOIN `serv_category` ON serv_category.cat_id=staff.cat_id");
            $row = $stmt->fetch(PDO::FETCH_ASSOC)
            ?>
          




            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        <script>
            function store(event,sid){
                var c=event.target.value;
             
               window.location.href="controller/upattendance.php?"+"st_id="+c+"& sid="+sid;

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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>

</body>

</html>