<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:54:01 GMT -->

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
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>


   <?php include 'navbar.php' ?>


 

    <main class="main">

        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Register</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>


        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="logo.jpeg" alt="" style="height:60px;width:70px">
                            <p>Create your Repair Me account</p>
                        </div>
                        <form action="controller/register.php" method="POST" enctype="multipart/form-data" novalidate>
                           
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required  pattern="[a-zA-Z][a-zA-Z ]{2,}">
                                <div class="invalid-feedback">
                  * Valid  name is required.
                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Your Phone Number" required pattern="[0-9]{10}">
                                <div class="invalid-feedback">
                  * Valid  Number is required.
                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email " required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <div class="invalid-feedback">
                  * Valid  Email is required.
                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Your Address" required>
                                <div class="invalid-feedback">
                  * Valid  address is required.
                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="img" placeholder="" required>
                                <div class="invalid-feedback">
                  * Image is required.
                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                <div class="invalid-feedback">
                  * Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters
                </div>
                            </div>
                          
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn" name="reg"><i class="far fa-paper-plane"></i> Register</button>
                            </div>
                        </form>
                        <div class="login-footer">
                            <p>Already have an account? <a href="login.php">Login.</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

   <?php 
   include 'footer.php'
   ?>


    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>

    <script>
    (function() {
      'use strict'

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByTagName('form')

        // Loop over them and prevent submission
        Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      }, false)
    }())
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

<!-- Mirrored from live.themewild.com/motex/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:54:01 GMT -->

</html>