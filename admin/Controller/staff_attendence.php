<?php 
include '../config.php';
$admin=new Admin();

if(isset($_POST['att'])){
    $stmt=$admin->ret("SELECT * FROM `staff`");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    $status = $_POST[$row['s_id']];
    $s_id=$row['s_id'];
    $stmt1 = $admin->cud("INSERT INTO `staff_attendence`( `s_id`, `sa_status`,`sa_date`) VALUES ('$s_id','$status',now())  ","success");
    echo"<script>alert('Attendence Inserted');window.location.href='../view_staff.php';</script>";
    }
}

    
    
    // echo"<script>alert('Attendence Updated');window.location.href='../view_staff.php';</script>";
   


?>