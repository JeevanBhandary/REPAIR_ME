<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['profile'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $stmt=$admin->cud("UPDATE `customer` SET `c_name`='$name',`c_phone`='$phone',`c_email`='$email',`c_address`='$address'",'UPDATED');
    echo "<script>alert('Profile Updated Successfully');window.location='../profile.php';</script>";

}
if (isset($_POST['u_img'])) {
	   $image='upload/'.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);
     $stmt=$admin->cud("UPDATE `customer` SET `c_image`='$image'",'UPDATED');
    echo "<script>alert(' Image Updated Successfully');window.location='../profile.php';</script>";
}
?>