<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['update_cus'])){
    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $b_name=$_POST['b_name'];
    $m_name=$_POST['m_name'];
    $s_name=$_POST['s_name'];
    $s_price=$_POST['s_price'];
    $v_number=$_POST['v_number'];
    $details=$_POST['details'];
    $stmt=$admin->cud("UPDATE `user` SET `brand`='$b_name',`model`='$m_name',`v_regno`='$v_number',`o_name`='$name',`o_email`='$email',`o_phone`='$phone',`o_address`='$address',`service`='$s_name',`price`='$s_price',`details`='$details' WHERE `u_id`='$uid'",'updated');
    echo "<script>alert('Customer Details Updated Successfully');window.location='../view_customer.php'</script>";
}
?>