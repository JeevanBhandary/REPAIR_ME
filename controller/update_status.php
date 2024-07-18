<?php 
include '../config.php';
$admin=new Admin();

if(isset($_GET['cancel'])){
    $unid = $_GET['cancel'];
    $c_id = $_GET['c_id'];
    $stmt=$admin->cud("UPDATE `booking` SET `b_status`='cancelled' WHERE `unid`='$unid'  and `c_id`='$c_id'",'UPDATED');
    echo "<script>alert('Booking Cancelled');window.location='../track.php';</script>";
}
?>