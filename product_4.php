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
    #sidebar {
        float: left;
        background: #fff;
        padding: 13px 0 0 45px;
        height: 1400px;
        border-right: 2px solid #eee;
    }

    li a:hover {
        font-weight: bold;
    }
</style>

<body>
    <?php include 'component/header_2.php' ?>
    <!-- Start Product Area -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="sidebar" style="width: 100%;">
                    <h2 style="font-family: 'Times New Roman', Times, serif;">DANH MỤC</h2>
                    <div>
                        <ul style="margin-top: 20px;">
                            <li><a style="font-weight: bold;" href="">Điện Thoại</a>
                                <ul style="margin-top: 15px;">
                                    <li style="margin-top: 15px;"><a  href="">Iphone</a></li>
                                    <li style="margin-top: 15px;"><a  href="">SamSung</a></li>
                                    <li style="margin-top: 15px;"><a  href="">Xiaomi</a></li>
                                    <li style="margin-top: 15px;"><a  style="font-weight: bold;" href="">Oppo</a></li>
                                    <li style="margin-top: 15px;"><a href="">Realme</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="product-area section" style="margin-top: -70px;">
                    <div class="container">
                        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: black;margin-bottom: 20px;">ĐIỆN THOẠI OPPO</p>
                        <div class="row" style="margin-top: -30px;">
                            <div class="col-12">
                            <img src="./images/oppobanner.png" alt="" style="margin-top: 40px;" width="100%">
                                <div class="product-info">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                                            <div class="tab-single">
                                                <div class="row">
                                                    <?php include('./component/product_oppo.php') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="pagination" style="display: flex;justify-content: center;margin-top: -50px">
                        <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
                            <li style="height: 20px;">
                                <a href="?trang=<?php echo $i ?>">
                                    <?php echo $i ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include 'component/footer.php'
?>

</html>
<?php include('jquery.php') ?>