<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['add_brand'])){
  
    $brand=$_POST['brand'];
    $stmt1=$admin->ret("SELECT * FROM `brand` WHERE `b_name`='$brand'");
    $num=$stmt1->rowCount();
    if($num>0){
        echo "<script>alert('Entered Brand Already Exists');window.location='../add_vehicle.php';</script>";
    }else{
    $stmt=$admin->cud("INSERT INTO `brand`(`b_name`)VALUES('$brand')",'INSERTED');
    echo "<script>alert('Brand Added Succesfully');window.location='../add_vehicle.php';</script>";
}
}

if(isset($_POST['add_model'])){
    $bid=$_POST['brand_name'];
    $model=$_POST['model'];
    $stmt1=$admin->ret("SELECT * FROM `model` WHERE `m_name`='$model'");
    $num=$stmt1->rowCount();
    if($num>0){
        echo "<script>alert('Entered Model Already Exists');window.location='../add_vehicle.php';</script>";
    }else{
    $stmt=$admin->cud("INSERT INTO `Model`(`b_id`,`m_name`)VALUES('$bid','$model')",'INSERTED');
    echo "<script>alert('Model Added Succesfully');window.location='../add_vehicle.php';</script>";
}
}
?> 