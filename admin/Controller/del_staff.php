<?php 
include '../config.php';
$admin=new Admin();

$sid=$_GET['sid'];
$stmt=$admin->cud("DELETE FROM `staff` WHERE `s_id`='$sid'",'DELETED');
echo "<script>alert('Staff removed successfully');window.location='../view_det_staff.php';</script>";
?>
