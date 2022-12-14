<?php
require_once('./db/connect.php');

$sql_so_san_pham="select count(*) from san_pham where danh_muc=N'Realme'";
$arr_so_san_pham=mysqli_query($connect,$sql_so_san_pham);
$ket_qua=mysqli_fetch_array($arr_so_san_pham);
$so_san_pham=$ket_qua['count(*)'];
$so_san_pham_mot_trang=9;
$so_trang=ceil($so_san_pham / $so_san_pham_mot_trang);

$trang="";
if(isset($_GET['trang'])){
    $trang=$_GET['trang'];
}else{
    $trang=1;
}
$bo_qua=$so_san_pham_mot_trang*($trang-1);
    $sql = "select * from san_pham where danh_muc=N'Realme' limit $so_san_pham_mot_trang offset $bo_qua";
$result = mysqli_query($connect, $sql);
?>
<?php foreach ($result as $value) : ?>
    <div class="col-xs-6 col-sm-4">
    <div class="single-product"  style="background-color: white;border-radius: 10px;">
            <div class="product-img">
                <a href="product-details.php?id=<?php echo $value['id'] ?>">
                    <img style="width: 100%;margin-top: 15px;" class="default-img" src="<?php echo $value['anh'] ?>" alt="#">
                    <!-- <img class="hover-img" src="<?php echo $value['anh'] ?>" alt="#"> -->
                </a>
                <?php if (!empty($_SESSION['id'])) { ?>
                    <div class="button-head">
                        <div style="width: 100%; height: 48px;" class="product-action-2">
                        <a style="width: 100%;" href="component/add_to_cart.php?id=<?php echo $value['id'] ?>"><button style="background-color: #444040;width: 100%;" type="button" class="btn btn-primary" >Thêm vào giỏ hàng</button></a>
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
