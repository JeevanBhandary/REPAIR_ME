<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['update_brand'])){
    $bid=$_POST['b_id'];
    $bname=$_POST['b_name'];
    $stmt=$admin->cud("UPDATE  `brand` SET `b_name`='$bname' WHERE `b_id`='$bid'",'UPDATED');
    echo "<script>alert('Brand Updated Successfully');window.location='../add_vehicle.php';</script>";
  
}
if(isset($_POST['update_model'])){
    $mid=$_POST['m_id'];
    $m_name=$_POST['m_name'];
    $stmt=$admin->cud("UPDATE  `model` SET `m_name`='$m_name' WHERE `m_id`='$mid'",'UPDATED');
    echo "<script>alert('Model Updated Successfully');window.location='../add_vehicle.php';</script>";
}

if(isset($_POST['update'])){
    $serv_id=$_POST['serv_id'];
    $serv_name=$_POST['serv_name'];
    $serv_price=$_POST['serv_price'];
    $serv_qty=$_POST['serv_qty'];
    $details=$_POST['details'];
    $details=implode(",",$details);
    $stmt=$admin->ret("UPDATE `service` SET `serv_name`='$serv_name',`serv_price`='$serv_price',`serv_qty`=`serv_qty`+'$serv_qty',`serv_details`='$details' WHERE `serv_id`='$serv_id'",'UPADTED');
    echo "<script>alert('Service Updated Successfully');window.location='../view_service.php';</script>";

}
?>