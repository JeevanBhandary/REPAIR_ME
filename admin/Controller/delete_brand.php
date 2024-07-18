<?php 
include '../config.php';
$admin=new Admin();
$bid=$_GET['b_id'];
    $stmt=$admin->cud("DELETE  FROM `brand` WHERE `b_id`='$bid'",'deleted');
    echo "<script>alert('Deleted Successfully');window.location='../add_vehicle.php';</script>";
  

?>