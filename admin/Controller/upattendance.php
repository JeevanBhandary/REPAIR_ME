<?php 
include '../config.php';
$admin=new Admin();

echo $status =$_GET['st_id'];
    $date=date('Y-m-d');
    echo $s_id=$_GET['sid'];
    $stmt1 = $admin->cud("UPDATE `staff_attendence` SET  `sa_status`='$status' WHERE `s_id`='$s_id' AND `sa_date`='$date' ","success");
echo "<script>alert('Attendence Updated Successfully');window.location='../view_staff.php';</script>";
    ?>