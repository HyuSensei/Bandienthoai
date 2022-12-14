<!DOCTYPE html>
<html lang="en">

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
<style>
    .col-sm-4 a img:hover {
        opacity: 0.6;
    }
</style>

<body >
    <?php include 'component/header_2.php' ?>
    <?php include('silder.php') ?>
    <div class="product-area section" style="margin-top: -30px;">
        <div class="container" style="background-color: #edeeef;border-radius: 10px;">
            <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: black;margin-bottom: 20px;margin-top: 20px;">IPHONE NỔI BẬT</p>
            <div class="row" style="margin-top: -30px;margin-bottom: 30px;">
                <div class="col-12">
                    <div class="product-info">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php include('./component/new_product.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #292c61;border-radius: 10px;">
    <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: white;margin-bottom: 20px;text-align: center;margin-top: 20px;">SAMSUNG NỔI BẬT</p>
        <div> <?php include('carouselss.php') ?></div>
        <div> <?php include('carouselsp.php') ?></div>
    </div>
    <div class="container" style="margin-top: 100px;background-color: #fcb9a2;border-radius: 10px;">
    <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: white;margin-bottom: 20px;margin-top: 20px;">XIAOMI NỔI BẬT</p>
    <?php include('carouselop.php') ?>
    </div>
    
    <!-- Start Shop Services Area -->
    <section class="shop-services section home" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Đơn hàng trên 200k</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Đổi trả miễn phí</h4>
                        <p>Kiểm tra đổi trả</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Thanh toán chắc chắn</h4>
                        <p>An toàn 100%</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Giá cả hợp lý</h4>
                        <p>Giá rẻ</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 offset-lg-3 col-12">
                            <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#444040; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
                            <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
                                    <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
                                    <div class="button" style="margin-top:30px;">
                                        <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php
    include 'component/footer.php'
    ?>
    <?php include('jquery.php') ?>
</body>



</html>