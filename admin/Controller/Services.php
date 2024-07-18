<?php 
include '../config.php';
$admin=new Admin();

if(isset($_POST['add_category'])){
  
    $serv_name=$_POST['Services'];
  
    $stmt=$admin->cud("INSERT INTO `serv_category`(`cat_name`)VALUES(' $serv_name')",'INSERTED');
    echo "<script>alert('Services Category Added Succesfully');window.location='../add_service.php';</script>";
}


if(isset($_POST['add_services'])){
    $b_id=$_POST['b_id'];
    $m_id=$_POST['m_id'];
    $cat_id=$_POST['cat_id'];
    $serv_name=$_POST['serv_name'];
    $details=$_POST['details'];
    $image_path="upload/".basename($_FILES['serv_file']['name']);
    move_uploaded_file($_FILES['serv_file']['tmp_name'],$image_path);
    $serv_price=$_POST['serv_price'];
    $serv_qty=$_POST['serv_qty'];
    $details=implode(",",$details);
    $stmt=$admin->cud("INSERT INTO `service`(`b_id`,`m_id`,`cat_id`,`serv_name`,`serv_image`,`serv_price`,`serv_qty`,`serv_details`)VALUES('$b_id','$m_id','$cat_id','$serv_name','$image_path','$serv_price','$serv_qty','$details')",'INSERTED');
    echo "<script>alert('Service Added Succesfully');window.location='../add_service.php';</script>";
}
?> 