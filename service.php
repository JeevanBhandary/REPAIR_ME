<?php 
include 'config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/inventory-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:40 GMT -->

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
    <style>
        .nav-link{
            color: red;
        }
    </style>
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
                <h2 class="breadcrumb-title">Services</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>


        <div class="car-area grid bg py-120">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="col-md-12">
                            <div class="car-sort">
                            <ul class="nav nav-pills nav-lb-tab d-flex justify-content-center" id="myTab" role="tablist">
                                        <!-- nav item -->
                                        <?php
                                        $stmt1 = $admin->ret("SELECT * FROM `serv_category` ");
                                        while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                            $id = $row1['cat_id'];
                                        ?>
                                            <li class="nav-item" role="presentation"><a href="service.php?cat_id=<?php echo $id ?>">
                                                    <!-- btn --> <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="false" tabindex="-1"><?php echo $row1['cat_name'] ?></button></a>
                                            </li>
                                        <?php } ?>
                                        <!-- nav item -->

                                        <!-- nav item -->

                                        <!-- nav item -->

                                    </ul>
                                
                            </div>
                        </div>
                        <div class="car-sort">
                                <h6>Select Manufacturer</h6>
                                
                                <div class="col-md-3 car-sort-box">
                                    <select class="form-control" onchange="showUser(this.value)">
                                    <option selected>Select Brand</option>
                                <?php
                                $stmt = $admin->ret("SELECT * FROM `brand` ");
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <option value="<?php echo $row['b_id'] ?>" id='<?php echo $row['b_id'] ?>'> <?php echo $row['b_name'] ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3 car-sort-box" >
                                    <select class="form-control" id="txtHint">
                                    <option selected>Select Model</option>
                                        
                                    </select>
                                </div>
                                <button class="btn btn-primary" onclick="selected_model(document.getElementById('txtHint').value)">search</button>
                            </div>
                        <div class="row" id='model_filter'>
                      
                        <?php 
                                     if(isset($_GET['cat_id'])){
                                        $cat_id=$_GET['cat_id'];
                                        $stmt=$admin->ret("SELECT * FROM `service`  WHERE  `cat_id`='$cat_id'");
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                        
                              <div class="col-md-6 col-lg-4">
                                <div class="car-item">
                                    <div class="car-img">
                                        <img src="admin/Controller/<?php echo $row['serv_image']?>" style="width:350px;height: 300px;object-fit:contain;overflow:hidden">
                                        
                                    </div>
                                    <div class="car-content">
                                        <div class="car-top">
                                            <h4><a href="#"><?php echo $row['serv_name']?></a></h4>
                                           
                                        </div>
                                       
                                        <div class="car-footer">
                                            <span class="car-price">₹ <?php echo $row['serv_price']?></span>
                                            <?php if(isset($_SESSION['cid'])){?>
                                            <a href="single_service.php?serv_id=<?php echo $row['serv_id']?>" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                            <?php }else{ ?>
                                                <a href="login.php" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php } }else{ ?>
                            <?php 
                       $stmt2=$admin->ret("SELECT * FROM `service`");
                       while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
                        ?>
                          
                          <div class="col-md-6 col-lg-4">
                                <div class="car-item">
                                    <div class="car-img">
                                        <img src="admin/Controller/<?php echo $row2['serv_image']?>" style="width:350px;height: 300px;object-fit:contain;overflow:hidden">
                                        
                                    </div>
                                    <div class="car-content">
                                        <div class="car-top">
                                            <h4><a href="#"><?php echo $row2['serv_name']?></a></h4>
                                           
                                        </div>
                                       
                                        <div class="car-footer">
                                            <span class="car-price">₹ <?php echo $row2['serv_price']?></span>
                                           
                                            <a href="single_service.php?serv_id=<?php echo $row2['serv_id']?>" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } }?>
                        </div>

                      

                    </div>
                </div>
            </div>
        </div>

    </main>

   <?php include 'footer.php' ?>


    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>

    <script>
function showUser(bid){
  if(window.XMLHttpRequest){
    xmlhttp= new XMLHttpRequest();
  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  
      document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
      
    }
  }
  xmlhttp.open("GET","ajax_model.php?bid="+ bid,true);
  xmlhttp.send();
}

</script>
<script>
function selected_model(mid){
  if(window.XMLHttpRequest){
    xmlhttp= new XMLHttpRequest();
  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  
      document.getElementById("model_filter").innerHTML = xmlhttp.responseText;
      
    }
  }
  xmlhttp.open("GET","ajax.all_service.php?m_id="+mid+"&cat_id="+<?php  echo $cat_id ?>,true);
  xmlhttp.send();
}
</script>
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

<!-- Mirrored from live.themewild.com/motex/inventory-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:53:41 GMT -->

</html>