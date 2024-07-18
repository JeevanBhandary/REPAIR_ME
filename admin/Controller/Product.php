<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['cat'])) 
{
$category=$_POST['category'];
$stmt=$admin->cud("INSERT INTO `category`(`cat_name`,`date`)VALUES ('$category',now())",'INSERTED' );
echo "<script>alert ('INSERTED SUCCESSFULLY'); window.location='../product.php'; </script>";
} 

if(isset($_POST['addprod'])){
$category=$_POST['category'];
$pname=$_POST['pname'];
$description=$_POST['description'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$image="Upload/".basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'],$image);

$stmt=$admin->cud("INSERT INTO `product`(`cat_id`,`p_image`,`p_name`,`description`,`p_price`,`p_quantity`,`date`)VALUES ('$category','$image','$pname','$description','$price','$quantity',now())",'INSERTED' );
echo "<script>alert ('INSERTED SUCCESSFULLY'); window.location='../product.php'; </script>";
} 



?>