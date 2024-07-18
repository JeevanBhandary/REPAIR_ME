<?php 
include '../config.php';
$admin=new Admin();
$c_id=$_SESSION['cid'];
if(isset($_GET['serv_id'])){
    $serv_id=$_GET['serv_id'];
    $quantity=1;
    $stmt=$admin->ret("SELECT * FROM `service` WHERE `serv_id`='$serv_id'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $serv_price=$row['serv_price'];
    $cart_total=$quantity * $serv_price;

    $stmt1=$admin->ret("SELECT * FROM `cart` WHERE `c_id`='$c_id' AND `serv_id`='$serv_id'");
    $cart_row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    if($num>0){
        $quantity_cart=$cart_row['qty']+1;
        $stmt2=$admin->cud("UPDATE `cart` SET `qty`='$quantity_cart' WHERE `c_id`='$c_id' AND `serv_id`='$serv_id'",'Updated');
        echo "<script>alert('Item added to cart');window.location='../service.php';</script>";
    }else{
        $stmt3=$admin->cud("INSERT INTO `cart` (`c_id`,`serv_id`,`qty`,`date`)VALUES('$c_id','$serv_id','$quantity',now())",'inserted');
        echo "<script>alert('Item added to cart');window.location='../service.php';</script>";
       }
}

?>
