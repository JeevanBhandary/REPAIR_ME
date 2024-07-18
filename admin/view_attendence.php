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
    <style>
         get the result that you can see in the preview selection

body{margin-top:20px;
background:#eee;
}
.fs35 {
    font-size: 35px !important;
}

.mw50 {
    max-width: 50px !important;
}
.mn {
    margin: 0 !important;
}
.mw140 {
    max-width: 140px !important;
}
.mb20 {
    margin-bottom: 20px !important;
}
.mr25 {
    margin-right: 25px !important;
}

.mw40 {
    max-width: 40px !important;
}

.p30 {
    padding: 30px !important;
}

.page-heading {
  position: relative;
  padding: 30px 40px;
  margin: -25px -20px 25px;
  border-bottom: 1px solid #d9d9d9;
  background-color: #f2f2f2;
}
.page-tabs {
  margin: -25px -20px 30px;
  padding: 15px 25px 0;
  border-bottom: 1px solid #ddd;
  background: #e9e9e9;
}
.page-tabs .nav-tabs {
  border-bottom: 0;
}
.page-tabs .nav-tabs > li > a {
  color: #AAA;
  padding: 10px 20px;
}
.page-tabs .nav-tabs > li:hover > a,
.page-tabs .nav-tabs > li:focus > a {
  border-color: #ddd;
}
.page-tabs .nav-tabs > li.active > a,
.page-tabs .nav-tabs > li.active > a:hover,
.page-tabs .nav-tabs > li.active > a:focus {
  color: #666;
  font-weight: 600;
  background-color: #eee;
  border-bottom-color: transparent;
}
@media (max-width: 800px) {
  .page-tabs {
    padding: 25px 20px 0;
  }
  .page-tabs .nav-tabs li {
    float: none;
    margin-bottom: 5px;
  }
  .page-tabs .nav-tabs li:last-child,
  .page-tabs .nav-tabs li.active:last-child {
    margin-bottom: 10px;
  }
  .page-tabs .nav-tabs > li > a:hover,
  .page-tabs .nav-tabs > li > a:focus {
    border: 1px solid #DDD;
  }
  .page-tabs .nav-tabs > li.active > a,
  .page-tabs .nav-tabs > li.active > a:hover,
  .page-tabs .nav-tabs > li.active > a:focus {
    border-bottom-color: #ddd;
  }
}
.panel {
  position: relative;
  margin-bottom: 27px;
  background-color: #ffffff;
  border-radius: 3px;
}
.panel.panel-transparent {
  background: none;
  border: 0;
  margin: 0;
  padding: 0;
}
.panel.panel-border {
  border-style: solid;
  border-width: 0;
}
.panel.panel-border.top {
  border-top-width: 5px;
}
.panel.panel-border.right {
  border-right-width: 5px;
}
.panel.panel-border.bottom {
  border-bottom-width: 5px;
}
.panel.panel-border.left {
  border-left-width: 5px;
}
.panel.panel-border > .panel-heading {
  background-color: #fafafa;
  border-color: #e2e2e2;
  border-top: 1px solid transparent;
}
.panel.panel-border > .panel-heading > .panel-title {
  color: #999999;
}
.panel.panel-border.panel-default {
  border-color: #DDD;
}
.panel.panel-border.panel-default > .panel-heading {
  border-top: 1px solid transparent;
}
.panel-menu {
  background-color: #fafafa;
  padding: 12px;
  border: 1px solid #e2e2e2;
}
.panel-menu.dark {
  background-color: #f8f8f8;
}
.panel-body .panel-menu {
  border-left: 0;
  border-right: 0;
}
.panel-heading + .panel-menu,
.panel-menu + .panel-body,
.panel-body + .panel-menu,
.panel-body + .panel-body {
  border-top: 0;
}
.panel-body {
  position: relative;
  padding: 15px;
  border: 1px solid #e2e2e2;
}
.panel-body + .panel-footer {
  border-top: 0;
}
.panel-heading {
  position: relative;
  height: 52px;
  line-height: 49px;
  letter-spacing: 0.2px;
  color: #999999;
  font-size: 15px;
  font-weight: 400;
  padding: 0 8px;
  background: #fafafa;
  border: 1px solid #e2e2e2;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel-heading + .panel-body {
  border-top: 0;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-heading .widget-menu .btn-group {
  margin-top: -3px;
}
.panel-heading .widget-menu .form-control {
  margin-top: 6px;
  font-size: 11px;
  height: 27px;
  padding: 2px 10px;
  border-radius: 1px;
}
.panel-heading .widget-menu .form-control.input-sm {
  margin-top: 9px;
  height: 22px;
}
.panel-heading .widget-menu .progress {
  margin-top: 11px;
  margin-bottom: 0;
}
.panel-heading .widget-menu .progress-bar-lg {
  margin-top: 10px;
}
.panel-heading .widget-menu .progress-bar-sm {
  margin-top: 15px;
}
.panel-heading .widget-menu .progress-bar-xs {
  margin-top: 17px;
}
.panel-icon {
  padding-left: 5px;
}
.panel-title {
  padding-left: 6px;
  margin-top: 0;
  margin-bottom: 0;
}
.panel-title > .fa,
.panel-title > .glyphicon,
.panel-title > .glyphicons,
.panel-title > .imoon {
  top: 2px;
  min-width: 22px;
  color: inherit;
  font-size: 14px;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #fafafa;
  border: 1px solid #e2e2e2;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.panel-body + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 2px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 2px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #eeeeee;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 19px;
}
.panel-group .panel-title {
  padding-left: 0;
}
.panel-group .panel-heading,
.panel-group .panel-heading a {
  position: relative;
  display: block;
  width: 100%;
}
.panel-group.accordion-lg .panel + .panel {
  margin-top: 12px;
}
.panel-group.accordion-lg .panel-heading {
  font-size: 14px;
  height: 54px;
  line-height: 52px;
}
.panel-group .accordion-icon {
  padding-left: 35px;
}
.panel-group .accordion-icon:after {
  position: absolute;
  content: "\f068";
  font-family: "FontAwesome";
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  -webkit-font-smoothing: antialiased;
  color: #555;
  left: 10px;
  top: 0;
}
.panel-group .accordion-icon.collapsed:after {
  content: "\f067";
}
.panel-group .accordion-icon.icon-right {
  padding-left: 10px;
  padding-right: 30px;
}
.panel-group .accordion-icon.icon-right:after {
  left: auto;
  right: 5px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 3px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 0;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #eeeeee;
}


.media {
  color: #999999;
  font-weight: 600;
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  color: #555555;
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}

/*===============================================
  Tabs
================================================= */
/* Tabs Wrapper */
.tab-block {
  position: relative;
}
/* Tabs Content */
.tab-block .tab-content {
  overflow: auto;
  position: relative;
  z-index: 10;
  min-height: 125px;
  padding: 16px 12px;
  border: 1px solid #e2e2e2;
  background-color: #FFF;
}
/*===============================================
  Tab Navigation
================================================= */
.tab-block .nav-tabs {
  position: relative;
  border: 0;
}
/* nav tab item */
.tab-block .nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
/* nav tab link */
.tab-block .nav-tabs > li > a {
  z-index: 9;
  position: relative;
  color: #AAA;
  font-size: 14px;
  font-weight: 400;
  padding: 14px 20px;
  margin-right: -1px;
  border-color: #e2e2e2;
  border-radius: 0;
  background: #fafafa;
}
.tab-block .nav-tabs > li:first-child > a {
  margin-left: 0;
}
/* nav tab link:hover */
.tab-block .nav-tabs > li > a:hover {
  background-color: #f4f4f4;
}
/* nav tab active link:focus:hover */
.tab-block .nav-tabs > li.active > a,
.tab-block .nav-tabs > li.active > a:hover,
.tab-block .nav-tabs > li.active > a:focus {
  cursor: default;
  position: relative;
  z-index: 12;
  color: #555555;
  background: #FFF;
  border-color: #e2e2e2;
  border-bottom: 1px solid #FFF;
}
/*===============================================
  Tab Navigation - Tabs Left
================================================= */
.tabs-left {
  float: left;
}
/* nav tab item */
.tabs-left > li {
  float: none;
  margin: 0 -1px -1px 0;
}
/* nav tab item link */
.tabs-left > li > a {
  padding: 14px 16px;
  color: #777;
  font-weight: 600;
  border: 1px solid transparent;
  border-color: #DDD;
  background: #fafafa;
}
/* nav tab link:hover */
/* nav tab active link:focus:hover */
.tab-block .tabs-left > li.active > a,
.tab-block .tabs-left > li.active > a:hover,
.tab-block .tabs-left > li.active > a:focus {
  color: #555;
  border-color: #DDD #FFF #DDD #DDD;
  cursor: default;
  position: relative;
  z-index: 12;
  background: #FFF;
}
/*===============================================
  Tab Navigation - Tabs Right
================================================= */
.tabs-right {
  float: right;
}
/* nav tab item */
.tabs-right > li {
  float: none;
  margin: 0 0 -1px -1px;
}
/* nav tab item link */
.tabs-right > li > a {
  padding: 14px 16px;
  color: #777;
  font-weight: 600;
  border: 1px solid transparent;
  border-color: #DDD;
  background: #fafafa;
}
/* nav tab link:hover */
/* nav tab active link:focus:hover */
.tab-block .tabs-right > li.active > a,
.tab-block .tabs-right > li.active > a:hover,
.tab-block .tabs-right > li.active > a:focus {
  color: #555;
  border-color: #DDD #DDD #DDD #FFF;
  cursor: default;
  position: relative;
  z-index: 12;
  background: #FFF;
}
/*===============================================
  Tab Navigation - Tabs Right
================================================= */
.tabs-below {
  position: relative;
}
/* nav tab item */
.tabs-below > li {
  float: left;
  margin-top: -1px;
}
/* nav tab item link */
.tabs-below > li > a {
  position: relative;
  z-index: 9;
  margin-right: -1px;
  padding: 11px 16px;
  color: #777;
  font-weight: 600;
  border: 1px solid #DDD;
  background: #fafafa;
}
/* nav tab link:hover */
/* nav tab active link:focus:hover */
.tab-block .tabs-below > li.active > a,
.tab-block .tabs-below > li.active > a:hover,
.tab-block .tabs-below > li.active > a:focus {
  cursor: default;
  position: relative;
  z-index: 12;
  color: #555555;
  background: #FFF;
  border-color: #DDD;
  border-top: 1px solid #FFF;
}
    </style>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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


<section id="content" class="container">
<?php 
 $sid=$_GET['sid'];
$stmt1=$admin->ret("SELECT * FROM `staff` INNER JOIN `serv_category` ON serv_category.cat_id=staff.cat_id WHERE staff.s_id='$sid'");
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
?>
    <!-- Begin .page-heading -->
    <div class="page-heading">
        <div class="media clearfix">
          <div class="media-left pr30">
            <a href="#">
              <img class="media-object mw150" src="controller/<?php echo $row1['s_image']?>" alt="..." style="height: 250px;width:300px;">
            </a>
          </div>                      
          <div class="media-body va-m">
            <h2 class="media-heading">Name: <?php echo $row1['s_name']?>
              
            </h2>
            <p class="lead">Email: <?php echo $row1['email']?></p>
            <p class="lead">Phone: <?php echo $row1['phone']?></p>
            <p class="lead">Address: <?php echo $row1['address']?></p>
            <p class="lead">Salary: ₹ <?php echo $row1['salary']?></p>
            <p class="lead">Category:  <?php echo $row1['cat_name']?></p>
           
          </div>
        </div>
    </div>
<?php } ?>
    <div class="row">
        
        <div class="col-md-12">

          
        <div class="col-sm-12 col-xl-11 " >
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Attendence Date</h6>
                    <form action="view_attendence.php?sid=<?php echo $sid?>" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date1">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name='date2'>
                        </div>

                        <button type="submit" class="btn btn-primary" name="report">Submit</button>
                        <button type="submit" class="btn btn-danger">Clear</button>
                    </form>
                </div>
            </div>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Attendence</h6>
                    </div>
                    <?php
                    $start_date = 0;
                    $end_date = 0;
                    if (isset($_POST['report'])) {
                        $start_date = $_POST['date1'];
                        $end_date = $_POST['date2'];
                    }

                    ?>

                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">SL.NO</th>
                                        <th scope="col">STAFF NAME</th>
                                        <th scope="col">ATTENDENCE</th>
                                        <th scope="col">DATE</th>
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $stmt = $admin->ret("SELECT * FROM  `staff_attendence` WHERE  `sa_date`  BETWEEN '$start_date' AND '$end_date' AND `s_id`='$sid' ");
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $row['sa_status'] ?></td>
                                            <td><?php echo $row['sa_date'] ?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                 
                </div>
            </div>
        </div>
      </div>
  </section>
                
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>



