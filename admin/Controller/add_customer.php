<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['add_cus'])){
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
    $stmt=$admin->cud("INSERT INTO `user` (`o_name`,`o_email`,`o_phone`,`o_address`,`brand`,`model`,`v_regno`,`service`,`price`,`details`)VALUES('$name','$email','$phone','$address','$b_name','$m_name','$v_number' ,'$s_name','$s_price','$details')",'inserted');
    echo "<script>alert('Customer Details Added Successfully');window.location='../add_customer.php'</script>";
}
?>