<?php

if(isset($_SESSION['aid'])){
                    $sid=$_SESSION['aid'];

                    $stmt=$admin->ret("SELECT * FROM `admin` ");
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
}
                    ?>




        <div class="sidebar  pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand  mb-1">
                    <h3 class="text-primary"><i class="fa fa-cogs me-3"></i>REPAIR ME</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    <img class="rounded-circle" src="logo.jpeg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $row['a_name']?></h6>
                    
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="view_user.php" class="nav-item nav-link"><i class="fa fa-users"></i>View User</a>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cogs me-2"></i>Update Services</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_vehicle.php" class="dropdown-item">Add Vehicle</a>
                            <a href="add_service.php" class="dropdown-item">Add Services</a>
                            <a href="view_service.php" class="dropdown-item">View Services</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-plus me-2"></i>Manage Staff</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_staff.php" class="dropdown-item">Add Staff</a>
                            <a href="view_staff.php" class="dropdown-item">View Staff</a>
                            <a href="view_det_staff.php" class="dropdown-item">View Staff Attendence</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-plus me-2"></i>Customer Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_customer.php" class="dropdown-item">Add Customer </a>
                            <a href="view_customer.php" class="dropdown-item">View Customer </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-plus me-2"></i>Purchase Entry</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="parchase_entry.php" class="dropdown-item">Add Purchase </a>
                            <a href="view_purchase_entry.php" class="dropdown-item">View Purchase </a>
                        </div>
                    </div>
                    <a href="view_booking.php" class="nav-item nav-link "><i class="fa fa-book-open me-2"></i>View Booking</a>
                    <a href="payment.php" class="nav-item nav-link "><i class="fa fa-credit-card me-2"></i>Payment</a>
                    <!-- <a href="generate_bill.php" class="nav-item nav-link "><i class="fa fa-file-invoice me-2"></i>Bill Invoice</a> -->
                    <a href="view_report.php" class="nav-item nav-link"><i class="fa fa-list me-2"></i>View Report</a>                   
                    <a href="view_feedback.php" class="nav-item nav-link"><i class="fa fa-comments me-2"></i>View Feedback</a>
                </div>
            </nav>
        </div>