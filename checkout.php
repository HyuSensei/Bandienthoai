<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');
require_once('api/checkout-form.php');
include './database/database.php';
$cart = [];
if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}
$idList = [];
foreach ($cart as $item) {
    $idList[] = $item['id'];
}
if (count($idList) > 0) {
    $idList = implode(',', $idList);


    $sql = "select * from san_pham where id in ($idList) ";
    $cartList = executeResult($sql);
} else {
    $cartList = [];
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>DIENTHOAIHAY</title>
    <?php include('css-libary.php') ?>
</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <?php include 'component/header_2.php'; ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.php">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <form class="form" method="post" action="#">
        <!-- Start Checkout -->
        <section class="shop checkout section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="checkout-form">
                            <h2>Thanh to??n t???i ????y</h2>
                            <p>Vui l??ng ????ng k?? ????? thanh to??n nhanh h??n</p>
                            <!-- Form -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>th??ng tin v???n chuy???n</h3>
                                    <div class="form-group">
                                        <label for="usr">T??n:</label>
                                        <input required="true" type="text" class="form-control" id="usr" name="fullname">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input required="true" type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">S??? ??i???n tho???i:</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">?????a ch??? nh??:</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Ghi ch??:</label>
                                        <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!--/ End Form -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="order-details">
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>CART TOTALS</h2>
                                <?php
                                $count = 0;
                                $total = 0;
                                foreach ($cartList as $item) {
                                    $num = 0;
                                    foreach ($cart as $value) {
                                        if ($value['id'] == $item['id']) {
                                            $num = $value['num'];
                                            break;
                                        }
                                    }
                                    $total  += $num * $item['khuyen_mai'];
                                }
                                ?>
                                <div class="content">
                                    <ul>
                                        <li>T???ng Ti???n<span>$ <?= $total ?></span></li>
                                        <li>(+) V???n Chuy???n<span>$10</span></li>
                                        <li class="last">T???ng C???ng<span>$<?= $total + 10000 ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>Payments</h2>
                                <div class="content">
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Ki???m tra thanh to??n</label>
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Thanh to??n khi giao h??ng</label>
                                        <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> PayPal</label>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <!-- Payment Method Widget -->
                            <div class="single-widget payement">
                                <div class="content">
                                    <img src="images/payment-method.png" alt="#">
                                </div>
                            </div>
                            <!--/ End Payment Method Widget -->
                            <!-- Button Widget -->
                            <div class="single-widget get-button">
                                <div class="content">
                                    <div class="button">
                                        <a href="checkout.php">
                                            <button class="btn btn-success" style="width: 100%;font-size: 32px;">HO??N TH??NH</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Button Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!--/ End Checkout -->

    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>MI???N PH?? V???N CHUY???N</h4>
                        <p>????n h??ng tr??n 300000</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>TR??? L???I MI???N PH??</h4>
                        <p>Trong v??ng 30 ng??y tr??? l???i</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>THANH TO??N CH???C CH???N</h4>
                        <p>Thanh to??n an to??n 100%</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>S???N PH???M T???T NH???T</h4>
                        <p>?????m b???o gi??</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>B???N TIN</h4>
                            <p> ????ng k?? nh???n b???n tin c???a ch??ng t??i v?? nh???n <span>10%</span> cho l???n mua h??ng ?????u ti??n c???a b???n</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="?????a chit email c???a b???n" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <?php include('./component/footer.php') ?>

    <?php include('jquery.php') ?>
</body>

</html>