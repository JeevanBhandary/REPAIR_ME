<?php 
if(isset($_SESSION['aid'])){
$sid=$_SESSION['aid'];
}
include 'config.php';
$admin=new Admin();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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


            <!-- Form Start -->
            

                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6 h-50">
                        <form action="Controller/brand.php" method='POST'>
                            <div class="bg-light rounded h-100 p-4">
                                <h5 class="mb-4">Add Brand</h5>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Add Brand</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="brand" required>

                                </div>


                                <button type="submit" class="btn btn-primary" name="add_brand">Add Brand</button>

                            </div>
                        </form>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                        <form action="Controller/brand.php" method='POST'>
                            <div class="bg-light rounded h-100 p-4">
                                <h5 class="mb-4">Add Model</h5>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col col-form-label">Select Brand</label>
                                    <div class="col-sm-8">
                                        <select class="form-select mb-3" aria-label="Default select example" name="brand_name">
                                            <option selected>Select Brand</option>
                                            <?php
                                            $stmt = $admin->ret("SELECT * FROM `brand` ");
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <option value="<?php echo $row['b_id'] ?>"><?php echo $row['b_name'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col col-form-label">Model Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="model" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" name="add_model">Add Model</button>
                            </div>
                        </form>
                        </div>




                    </div>
                </div>
            </form>
<div>
    <div>
    <div class="row g-4 mt-5 mb-3 " style="margin-left: 20px;">

    <div class="col-sm-10 col-xl-6">
                        <div class="bg-light rounded  p-4">
                            <h6 class="mb-4">VIEW BRAND</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">SL.NO</th>
                                        <th scope="col">BRAND NAME</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    $stmt=$admin->ret("SELECT * FROM  `brand` ");
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                        $bid=$row['b_id'];
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++?></th>
                                        <td><?php echo $row['b_name']?></td>
                                        <td><?php echo $row['date']?></td>
                                        <td>
                                        <a href="update_pet?<?php echo $row['b_id'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#basicModal<?php echo $row['b_id'] ?>"> <i class="fa fa-edit "></i></a>
                                    <a href="./Controller/delete_brand.php?b_id=<?php echo $row['b_id']?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                    </td>
                                    </tr>
                                    <div class="modal fade" id="basicModal<?php echo $row['b_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                          <div class="modal-dialog">
                            <form action="./Controller/update_cat.php" method="POST">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel">UPDATE BRAND</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php
                                // $pet_id=$_GET['pet-id'];
                                $stmt2 = $admin->ret("SELECT * FROM `brand` WHERE `b_id`='$bid'");
                                $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);


                                ?>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Edit brand" value="<?php echo $row2['b_id'] ?>" name="b_id" />
                                    <label for="exampleInputName1">Edit Pet</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Edit Brand" value="<?php echo $row2['b_name'] ?>" name="b_name" />
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="update_brand">Save changes</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-10 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">VIEW MODEL</h6>
                            <table class="table table-hover">
                                <thead>
                                    <th scope="col">SL.NO</th>
                                    <th scope="col">MODEL NAME</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">ACTION</th>
                                </thead>
                                    <tbody>
                                <?php 
                                    $i=1;
                                    $stmt=$admin->ret("SELECT * FROM  `model` ");
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                        $m_id=$row['m_id'];
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo $i++?></td>
                                        <td><?php echo $row['m_name']?></td>
                                        <td><?php echo $row['date']?></td>
                                        <td style="display: flex;gap: 10px;">  <a href="update_pet?<?php echo $row['m_id'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#basicModal1<?php echo $row['m_id'] ?>"> <i class="fa fa-edit "></i></a>
                                    <a href="./Controller/delete_model.php?m_id=<?php echo $row['m_id']?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                                    </tr>
                                    <div class="modal fade" id="basicModal1<?php echo $row['m_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                          <div class="modal-dialog">
                            <form action="./Controller/update_cat.php" method="POST">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel">UPDATE MODEL</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php
                                // $pet_id=$_GET['pet-id'];
                                $stmt2 = $admin->ret("SELECT * FROM `model` WHERE `m_id`='$m_id'");
                                $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                                

                                ?>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <input type="hidden" class="form-control" id="exampleInputName1" placeholder="Edit Model" value="<?php echo $row2['m_id'] ?>" name="m_id" />
                                    <label for="exampleInputName1">Edit Model</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Edit Model" value="<?php echo $row2['m_name'] ?>" name="m_name" />
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="update_model">Save changes</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  
    </div>
    </div>
</div>
            <!-- Form End -->


            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->
<!-- Button trigger modal -->



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