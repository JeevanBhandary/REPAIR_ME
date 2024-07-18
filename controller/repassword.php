<?php
include('../config.php');
$admin=new Admin();

$semail=$_SESSION['supemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{
	$password=password_hash($password,PASSWORD_BCRYPT);
	  $sql=$admin->cud("UPDATE `customer` SET `c_password`='$password' where `c_email`='$semail'","saved");
	  echo "<script>alert('Password is sucessfully changed');
    window.location='../login.php';
 </script>"; 

}
else
{
	 echo "<script>alert('Password does not match');
    window.location='../createpassword.php';
 </script>";
}