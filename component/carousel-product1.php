<?php
require_once('./db/connect.php');
$sql1 = "select * from san_pham where danh_muc=N'Samsung' and id >=66 and id<=69 ";
$result1 = mysqli_query($connect, $sql1);
?>
<?php foreach ($result1 as $value) : ?>
    <div class="col-xl-3 col-lg-3 col-md-4 col-12">
        <div class="single-product" style="background-color: white;border-radius: 10px;">
            <div class="product-img">
                <a href="product-details.php?id=<?php echo $value['id'] ?>">
                    <img style="width: 100%;margin-top: 15px;" class="default-img" src="<?php echo $value['anh'] ?>" alt="#">
                    <!-- <img class="hover-img" src="<?php echo $value['anh'] ?>" alt="#"> -->
                </a>
                <?php if (!empty($_SESSION['id'])) { ?>
                    <div class="button-head">
                        <div style="width: 100%; height: 48px;" class="product-action-2">
                            <a style="width: 100%;" href="component/add_to_cart.php?id=<?php echo $value['id'] ?>"><button style="background-color: #444040;width: 100%;" type="button" class="btn btn-primary">Thêm vào giỏ hàng</button></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="product-content">
                <h3><a href="product-details.php" style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            text-align: center;"><?php echo $value['ten_san'] ?></a></h3>
                <div class="product-price">
                    <p style="color: #74140d;font-weight: bold;font-size: 18px;text-align: center;margin-bottom: 5px;"><?php echo $value['gia'] ?> đ</p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>