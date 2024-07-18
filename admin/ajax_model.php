<?php 
include 'config.php';
$admin =new Admin();

$bid=$_GET['b_id'];

$stmt=$admin->ret("SELECT * FROM `model` WHERE `b_id`='$bid' ");

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

    echo "<option value='".$row['m_id']."'>".$row['m_name']."</option>";
}


?>