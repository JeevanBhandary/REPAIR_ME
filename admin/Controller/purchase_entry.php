<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['pur'])){
    $p_by=$_POST['p_by'];
    $p_name=$_POST['p_name'];
    $p_price=$_POST['p_price'];
    $p_qty=$_POST['p_qty'];
    $p_tot=$_POST['p_tot'];
    $detail=$_POST['details'];
    $stmt=$admin->cud("INSERT INTO `purchase`(`purchased by`,`pa_name`,`pa_quantity`,`price`,`total_price`,`details`)VALUES('$p_by','$p_name','$p_qty','$p_price','$p_tot','$detail')",'inserted');
    echo "<script>alert('Purchase Entry Added Successfully');window.location='../parchase_entry.php'</script>";
}
?>