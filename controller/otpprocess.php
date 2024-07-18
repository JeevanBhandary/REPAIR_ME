<?php 
include '../config.php';
$admin=new Admin();
 $otp=$_SESSION['otp'];
 $enteredotp=$_POST['otp'];
if($otp==$enteredotp){
    header('location:../createpassword.php');
}else{
    echo "<script>alert('OTP does not match!!');window.location='../login.php';</script>";
}

?>