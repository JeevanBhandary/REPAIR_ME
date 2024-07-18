<?php 
include '../config.php';
$admin =new Admin();
$cid=$_SESSION['cid'];
if(isset($_POST['feed'])){
    $msg=$_POST['msg'];
    $stmt=$admin->cud("INSERT INTO `feedback`(`c_id`,`message`)VALUES('$cid','$msg')",'INSERTED');
    echo "<script>alert('Thank You For Giving Feedback!!');window.location='../service.php'</script>";
}
?>