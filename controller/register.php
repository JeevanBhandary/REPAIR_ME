<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['reg'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $image='upload/'.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);
    $password=$_POST['password'];
    $stmt1=$admin->ret("SELECT * FROM `customer` WHERE `c_email`='$email'");
    $num=$stmt1->rowCount();
    if($num>0){
        echo"<script>alert('Email Already Exist');window.location=history.back();</script>";
    }
    $password=password_hash($password,PASSWORD_BCRYPT);
    $stmt=$admin->cud("INSERT INTO `customer` (`c_name`,`c_email`,`c_phone`,`c_address`,`c_image`,`c_password`)VALUES('$name','$email','$phone','$address','$image','$password')",'INSERTED');
    echo "<script>alert('Registered  Succesfully');window.location='../login.php';</script>";
}
?>