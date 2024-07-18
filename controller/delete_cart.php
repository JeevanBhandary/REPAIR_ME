<?php 
include '../config.php';
$admin=new Admin();
$cart_id=$_GET['cart_id'];
$stmt=$admin->cud("DELETE FROM `cart` WHERE `cart_id`='$cart_id'",'deleted');
echo "<script>alert('Item deleted Successfully');window.location='../cart.php';</script>";


?>