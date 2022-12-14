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
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- End Preloader -->
    <?php include 'component/header_2.php'; ?>
    <!--/ End Header -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h3>Nhập các thông tin liên hệ</h3>
                            </div>
                            <form class="form" method="post" action="./component/process_lienhe.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Họ và tên<span>*</span></label>
                                            <input name="name" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Địa chỉ<span>*</span></label>
                                            <input name="address" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input name="email" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Số điện thoại<span>*</span></label>
                                            <input name="phone_number" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>Nội dung liện hệ<span>*</span></label>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Gửi</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i style="background-color: black;" class="fa fa-phone"></i>
                                <h4 class="title">Hotline:</h4>
                                <ul>
                                    <li>0986538387</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i style="background-color: black;" class="fa fa-envelope-open"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
                                    <li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i style="background-color: black;" class="fa fa-location-arrow"></i>
                                <h4 class="title">Địa Chỉ</h4>
                                <ul>
                                    <li>Đường vắng - 126A - 17A - Cát Quế - Hoài Đức - Hà Nội</li>
                                    <li>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29796.41324963635!2d105.78916531562504!3d21.01060180000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7df1c12b81%3A0x9f1d2e60ca1ab383!2zVGjhur8gR2nhu5tpIERpIMSQ4buZbmcgVGjDoWkgSMOg!5e0!3m2!1svi!2s!4v1671029252338!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('./component/footer.php') ?>
    <!-- /End Footer Area -->
    <?php include('jquery.php') ?>
</body>

</html>