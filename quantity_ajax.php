<?php
include 'config.php';
$admin = new Admin();
$c_id = $_SESSION['cid'];
$stmt1 = $admin->ret("SELECT COUNT(*) FROM `cart` ");
$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$qantity = implode($row1);
if (isset($_GET['cart_id_increment'])) {
    $cart_id = $_GET['cart_id_increment'];
    $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `service` ON service.serv_id=cart.serv_id WHERE `cart_id`='$cart_id' AND `c_id`='$c_id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $sub_price = $row['serv_price'];
    $old_quantity = $row['qty'];
    $new_quantity = $old_quantity + 1;
    $total = $sub_price * $new_quantity;

    $stmt1 = $admin->cud("UPDATE `cart` SET `qty`='$new_quantity' WHERE  `cart_id`='$cart_id' AND `c_id`='$c_id'", 'updated');
}
if (isset($_GET['cart_id_decrement'])) {
    $cart_id = $_GET['cart_id_decrement'];
    $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `service` ON service.serv_id=cart.serv_id WHERE `cart_id`='$cart_id' AND `c_id`='$c_id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $sub_price = $row['serv_price'];
    $old_quantity = $row['qty'];
    $new_quantity = $old_quantity - 1;
    $total = $sub_price * $new_quantity;

    $stmt1 = $admin->cud("UPDATE `cart` SET `qty`='$new_quantity' WHERE  `cart_id`='$cart_id' AND `c_id`='$c_id'", 'updated');
}
?>
 

            <div class="container">
                <div class="shop-cart-wrapper">
                    <div class="table-responsive">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>SL.NO</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $total = 0;
                                $garnd_total = 0;
                                $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `service` ON service.serv_id=cart.serv_id  WHERE cart.c_id='$c_id'");
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $price = $row['serv_price'];
                                    $quantity = $row['qty'];
                                    $total = $price * $quantity;
                                    $garnd_total = $garnd_total + $total;
                                ?>
                                    <tr>
                                        <td>
                                            <div class="cart-img">
                                                <?php echo $i++ ?>
                                            </div>
                                        </td>
                                        <td>
                                            <h5> <?php echo $row['serv_name'] ?></h5>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <span>₹ <?php echo $row['serv_price'] ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-qty">
                                                <?php if ($row['qty'] > 1) { ?>
                                                    <button onclick="decrement(<?php echo $row['cart_id']; ?>)"><i class="fal fa-minus"></i></button>
                                                <?php } ?>
                                                <input type="text" value="<?php echo $row['qty'] ?>" disabled>
                                                <button onclick="increment(<?php echo $row['cart_id']; ?>)"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-sub-total">
                                                <span>₹ <?php echo $total ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="controller/delete_cart.php?cart_id=<?php echo $row['cart_id'] ?>" class="cart-remove"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="cart-footer">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">

                            </div>
                            <div class="col-md-6 col-lg-8">
                                <div class="cart-summary">
                                    <ul>

                                        <li class="cart-total"><strong>Total:</strong> <span>₹ <?php echo $garnd_total ?></span></li>
                                    </ul>
                                    <div class="text-end mt-40">
                                        <a href="checkout.php" class="theme-btn">Checkout Now<i class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      