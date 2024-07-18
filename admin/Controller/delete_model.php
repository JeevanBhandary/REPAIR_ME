<?php 
include '../config.php';
$admin=new Admin();
$mid=$_GET['m_id'];
    $stmt=$admin->cud("DELETE  FROM `model` WHERE `m_id`='$mid'",'deleted');
    echo "<script>alert('Deleted Successfully');window.location='../add_vehicle.php';</script>";
  

?>