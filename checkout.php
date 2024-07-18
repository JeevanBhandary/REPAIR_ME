<?php 
include 'config.php';
$admin=new Admin();
$cid=$_SESSION['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/shop-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:54:31 GMT -->

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
                <h2 class="breadcrumb-title">Shop Checkout</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Shop Checkout</li>
                </ul>
            </div>
        </div>

        <form action="controller/booking.php" method="POST" id="myForm">
        <div class="shop-checkout py-120">
           
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">


                            <div class="checkout-widget">
                                <h4 class="checkout-widget-title">Shipping Address</h4>
                                <div class="checkout-form">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Your First Name" name="name" required  pattern="[a-zA-Z][a-zA-Z ]{2,}">
                                                <div class="invalid-feedback">
                  * Valid  name is required.
                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" placeholder="Your Phone" name="phone" required pattern="[0-9]{10}">
                                                <div class="invalid-feedback">
                  * Valid  Number is required.
                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Your Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                                <div class="invalid-feedback">
                  * Valid  Email is required.
                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Address </label>
                                                <input type="text" class="form-control" placeholder="Your Address" name="address" required>
                                                <div class="invalid-feedback">
                  * Valid  address is required.
                </div>
                                            </div>
                                        </div>
<div class="col-lg-912">
                                            <div class="form-group">
                                                <label>Vehicle Numer </label>
                                                <input type="text" class="form-control" placeholder="Vehicle Numer" name="v_no" required>
                                                <div class="invalid-feedback">
                  * Valid  Vehicle Numer is required.
                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Booking Date</label>
                                                <input type="date" class="form-control" placeholder="Your Phone" name="b_date" required min="<?php echo date('Y-m-d')?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Booking Time</label>
                                                <input type="time"  class="form-control" id="time-range" placeholder="Your Phone" name="b_time" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="checkout-widget">
                                <h4 class="checkout-widget-title">Payment Info</h4>
                                <div class="checkout-form">
                                    <div class="mt-4">
                                        <div class="payment-methods mb-50">
                                            <div class="d-block my-3">
                                                <div class="custom-control custom-radio">
                                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="upi" id="upi" onclick="cardform(this.value)" required>
                                                    <label class="custom-control-label" for="credit">UPI/Netbanking</label>
                                                    <div style="display: none;" id="upi_div">
                                                        <b>scan and pay</b>
                                                        <img src="scan.jpg" style="height:100px; width: 150px">

                                                        <!-- transaction id input form-->
                                                        <div class="col-md-6 mb-3">
                                                            <p><input type="text" placeholder="Enter Transaction id" class="form-control inputtxt" name="tans" required id='trid' pattern="[a-zA-Z][a-zA-Z ]{2,}"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="cash" id="cash" onclick="cardform(this.value)" required>
                                                    <label class="custom-control-label" for="debit">Cash on Delivery</label>
                                                    <div style="display: none;" id="cash_div">
                                                        <b>pay when your receive item</b>
                                                    </div>
                                                </div>
                                               
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
            
        </div>
       
        <div class="col-lg-4">
            <div class="checkout cart-summary">
                <h4 class="mb-30">Cart Summary</h4>
                
                <ul>
                <?php
              $total = 0;
              $garnd_total = 0;
              $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `service` ON service.serv_id=cart.serv_id  WHERE cart.c_id='$cid'");
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $price = $row['serv_price'];
                $quantity = $row['qty'];
                $total = $price * $quantity;
                $garnd_total = $garnd_total + $total;
              ?>
                    <div class="p-3">
                  <div class="border-bottom pt-2">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-8 font-small">
                        <p class="mb-2 text"><?php echo $row['serv_name'] ?></p>
                        <p class="mb-2 theme-text-accent-one"><?php echo $row['qty'] ?> x <?php echo $price ?></p>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4 font-small">
                        <div class="d-flex justify-content-end align-items-end">
                          <div class="product-price mb-3 fw-bold">
                            <i class="bi bi-currency-rupee"></i><span class="ms-1"><?php echo $total ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                    <?php } ?>
                    
                    <li class="cart-total"><strong>Total Pay:</strong> <span>₹ <?php echo $garnd_total?></span></li>
                </ul>
                <div class="text-end mt-40">
                    <button class="theme-btn" name="booking" type="submit">Confirm Payment<i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </form>
    </main>
 
    <?php include 'footer.php' ?>


    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>

    <script>
        function cardform(myvalue) {

            if (myvalue == 'card') { //radio button id
            
                document.getElementById('upi_div').style.display = 'none';
                document.getElementById('cash_div').style.display = 'none';
            } else if (myvalue == 'upi') {
              
                document.getElementById('upi_div').style.display = 'block';
                document.getElementById('cash_div').style.display = 'none';
                document.getElementById('trid').setAttribute('required');

            } else {
              
                document.getElementById('upi_div').style.display = 'none';
                document.getElementById('cash_div').style.display = 'block';
                document.getElementById('trid').removeAttribute('required');
            }

        }
    </script>
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
  <script>
  const form = document.getElementById("myForm");
  const timeRangeInput = document.getElementById("time-range");

  form.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    const input = timeRangeInput.value;

    const startTime = "10:00";
    const endTime = "18:00";

    const enteredTime = new Date(`2000-01-01T${input}`);
    const start = new Date(`2000-01-01T${startTime}`);
    const end = new Date(`2000-01-01T${endTime}`);

    const isTimeInRange = enteredTime >= start && enteredTime <= end;

    if (isTimeInRange) {
      // Time range is valid, continue with form submission
      form.submit();
    } else {
      alert("Invalid time range. Please enter a time between 10:00 AM and 6:00 PM.");
    }
  });
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

<!-- Mirrored from live.themewild.com/motex/shop-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 04:54:31 GMT -->

</html>