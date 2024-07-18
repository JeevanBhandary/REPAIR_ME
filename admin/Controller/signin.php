<?php 
include '../config.php'; 
$admin=new Admin();
if(isset($_POST['signin'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_name`='$name' ");
    
    $num=$stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // $status=$row['status'];
        $dbpass=$row['password'];
       
       if(password_verify($password,$dbpass)){
            $_SESSION['aid']=$row['a_id'];
            echo "<script>alert('Logged in!! ');window.location='../index.php';</script>";
        }else{
            echo "<script>alert('You Have Entered Wrong Password');window.location='../signin.php';</script>";
        }
    }else{
        echo "<script>alert('You are not a Valid User');window.location='../signin.php';</script>";
    }
   
}
?>