<header class="header">


<div class="main-navigation">
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <a class="navbar-brand" href="index-2.html">
                <img src="logo.jpeg" style="width: 70px; height: 50px" alt="logo">
            </a>
            <div class="mobile-menu-right">
                <div class="search-btn">
                    <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link  active" href="index.php" >Home</a>
                        
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                  
                    
                   
                  
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profile</a>
                        <ul class="dropdown-menu fade-down">
                            <?php  
                            if(isset($_SESSION['cid'])){
                            ?>
                            <li><a class="dropdown-item" href="dashboard.php">My Profile</a></li>
                            <?php }else{ ?>
                                <li><a class="dropdown-item" href="login.php">My Profile</a></li>
                                <?php } ?>  
                              <?php  
                            if(!isset($_SESSION['cid'])){
                            ?>   
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>
                            <?php }else{?>
                                <li><a class="dropdown-item" href="controller/logout.php">Logout</a></li>

                           <?php  } ?>
                        </ul>
                    </li>
                </ul>
                <div class="nav-right">
                   
                    <div class="cart-btn">
                    <?php if(isset($_SESSION['cid'])){ ?>
                        <a href="cart.php" class="nav-right-link"><i class="far fa-cart-plus"></i><span> <?php

if (isset($_SESSION['cid'])) {
  $cid = $_SESSION['cid'];

  $stmt = $admin->ret("SELECT COUNT(*) FROM `cart` WHERE `c_id` = '$cid'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  echo implode($row);
} else {
  echo $quantity = 0;
} ?></span></a>
<?php }else{?>
                       
                            <a href="login.php" class="nav-right-link"><i class="far fa-cart-plus"></i><span>
<?php if (isset($_SESSION['cid'])) {
  $cid = $_SESSION['cid'];

  $stmt = $admin->ret("SELECT COUNT(*) FROM `cart` WHERE `c_id` = '$cid'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  echo implode($row);
} else {
  echo $quantity = 0;
} ?></span></a>
<?php } ?>
                    </div>
                   
                </div>
            </div>

           

        </div>
    </nav>
</div>
</header>