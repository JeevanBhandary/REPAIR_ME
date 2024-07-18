<?php 
include '../config.php';
$admin=new Admin();

if(isset($_GET['update_order_status'])){
    $unid = $_GET['update_order_status'];
    $c_id = $_GET['c_id'];
    $stmt=$admin->cud("UPDATE `booking` SET `b_status`='booking_accepted' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Booking Accepted');window.location='../view_booking.php';</script>";
}
if(isset($_GET['cancel'])){
    $unid = $_GET['cancel'];
    $c_id = $_GET['c_id'];
    $stmt=$admin->cud("UPDATE `booking` SET `b_status`='cancelled' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Booking Cancelled');window.location='../view_booking.php';</script>";
}
if(isset($_GET['booking_accepted'])){
    $unid = $_GET['booking_accepted'];
    $c_id = $_GET['c_id'];
    $stmt=$admin->cud("UPDATE `booking` SET `b_status`='Ready_For_Service' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Ready For Service');window.location='../view_booking.php';</script>";
}
if(isset($_GET['Ready_For_Service'])){
    $unid = $_GET['Ready_For_Service'];
    $c_id = $_GET['c_id'];
    $stmt=$admin->cud("UPDATE `booking` SET `b_status`='Service_Going_On' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Service Going On');window.location='../view_booking.php';</script>";
}
if(isset($_GET['Service_Going_On'])){
    $unid = $_GET['Service_Going_On'];
    $c_id = $_GET['c_id'];
    $stmt=$admin->cud("UPDATE `booking` SET `b_status`='Service_Completed' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Service Completed');window.location='../view_booking.php';</script>";
}

if(isset($_GET['pay_bill'])){
    $unid = $_GET['pay_bill'];
    $c_id = $_GET['cid'];
    $stmt=$admin->cud("UPDATE `payment` SET `pay_status`='paid' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Paid Succesfully');window.location='../generate_bill.php?unid=$unid&c_id=$c_id';</script>";
}
?>