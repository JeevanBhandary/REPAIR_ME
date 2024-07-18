<?php 
include '../config.php';
$admin=new Admin();
 $c_id=$_SESSION['cid'];

    $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `service` ON service.serv_id=cart.serv_id   WHERE `c_id`='$c_id' ");
    $un=uniqid();
    $stmt1=$admin->ret("SELECT * FROM `order` ORDER BY `or_id` DESC LIMIT 1");
   
    $num=$stmt1->rowCount();
    if($num > 0) {
        $row1=$stmt1->fetch(PDO::FETCH_ASSOC);
        $last_order_number = explode('V',$row1['invoice']);
        $last_order_number1 = $last_order_number[1];
        $last_order_number1;
    } else {
        $last_order_number1 = 100;
    }
    while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){
 


$next_order_number = 'INV'.(int)$last_order_number1+ 1;

        $price=$row['serv_price'];
        $serv_id=$row['serv_id'];
        $g_total=0;
        $s_qty=$row['qty'];
        $total=$price*$s_qty;
        $g_total=$g_total+$total;
          

        $stmt1=$admin->rcud("INSERT INTO `order` (`c_id`,`serv_id`,`or_qty`,`or_total`,`invoice`,`unid`)VALUES('$c_id','$serv_id','$s_qty','$g_total','$next_order_number','$un')");


        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $v_no=$_POST['v_no'];
        $date=$_POST['b_date'];
        $time=$_POST['b_time'];
        $status='pending';
       
        $stmt2=$admin->rcud("INSERT INTO `booking` (`or_id`,`c_id`,`serv_id`,`b_name`,`b_email`,`b_phone`,`b_address`,v_number,`b_date`,`b_time`,`b_status`,`unid`)VALUES('$stmt1','$c_id','$serv_id','$name','$email','$phone','$address','$v_no','$date','$time','$status','$un')"); 


        $stmt4=$admin->ret("SELECT * FROM `order` WHERE `or_id`='$stmt1'");
        $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
        $or_id=$row4['or_id'];
        $pay_method=$_POST['paymentMethod'];
        $tans=$_POST['tans'];
        // $card_name=$_POST['card_name'];
        // $card_no=$_POST['card_no'];
        $pay_status='pending';
        $stmt3=$admin->cud("INSERT INTO `payment` (`c_id`,`or_id`,`b_id`,`pay_method`,`trans_id`,`unid`,`pay_status`)VALUES('$c_id','$or_id','$stmt2','$pay_method','$tans','$un','$pay_status')",'INSERTED');

        $stmt5=$admin->ret("SELECT * FROM `service` WHERE `serv_id`='$serv_id' ");
        $row5=$stmt5->fetch(PDO::FETCH_ASSOC);
        $new_qty=$row5['serv_qty']-$s_qty;
        $stmt6=$admin->cud("UPDATE `service` SET `serv_qty`='$new_qty' WHERE `serv_id`='$serv_id' AND `serv_qty` IS NOT NULL",'UPDATED');

    }
    $stmt6=$admin->cud("DELETE FROM `cart` WHERE `c_id`='$c_id'",'DELETED');
     echo"<script>alert('Thank You For Booking!');window.location='../index.php';</script>";
    
 
?>