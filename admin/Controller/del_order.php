<?php 
include '../config.php';
$admin=new Admin();

$unid=$_GET['unid'];
$stmt=$admin->cud("DELETE FROM `order` WHERE `unid`='$unid'",'DELETED');
echo "<script>alert('Order Deleted');window.location='../view_booking.php';</script>";
?>
