<?php 
include '../config.php';
$admin=new Admin();
$serv_id=$_GET['serv_id'];
    $stmt=$admin->cud("DELETE  FROM `service` WHERE `serv_id`='$serv_id'",'deleted');
    echo "<script>alert('Deleted Successfully');window.location='../view_service.php';</script>";
  

?>