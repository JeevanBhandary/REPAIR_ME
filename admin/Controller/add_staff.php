<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['addstaff'])) 
{
	$category=$_POST['category'];
	$staff=$_POST['staff'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$image='upload/'.basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'],$image);
	$salary=$_POST['sal'];
	$password=$_POST['pass'];
	$stmt=$admin->cud("INSERT INTO `staff`(`cat_id`,`s_name`,`phone`,`email`,`address`,`s_image`,`salary`,`password`)VALUES ('$category','$staff','$phone','$email','$address','$image','$salary','$password')",'INSERTED' );
	echo "<script>alert ('Staff Added Succesfully'); window.location='../add_staff.php'; </script>";
}


?>