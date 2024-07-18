<?php 
include 'config.php';
$admin=new Admin(); 
if(isset($_GET['m_id']) && isset($_GET['cat_id'])){
    $mid=$_GET['m_id'];
    $cat_id=$_GET['cat_id'];
    $stmt=$admin->ret("SELECT * FROM `service` INNER JOIN `model` ON service.m_id=model.m_id WHERE  service.cat_id='$cat_id' and model.m_id='$mid'");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
 <div class="col-md-6 col-lg-4">
                                <div class="car-item">
                                    <div class="car-img">
                                        <img src="admin/Controller/<?php echo $row['serv_image']?>" style="width:350px;height: 300px;object-fit:contain;overflow:hidden">
                                        
                                    </div>
                                    <div class="car-content">
                                        <div class="car-top">
                                            <h4><a href="#"><?php echo $row['serv_name']?></a></h4>
                                           
                                        </div>
                                       
                                        <div class="car-footer">
                                            <span class="car-price">₹ <?php echo $row['serv_price']?></span>
                                            <?php if(isset($_SESSION['cid'])){?>
                                            <a href="single_service.php?serv_id=<?php echo $row['serv_id']?>" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                            <?php }else{ ?>
                                                <a href="login.php" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } } ?>