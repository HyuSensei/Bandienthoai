<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include('css-libary.php') ?>
    <title>DIENTHOAIHAY</title>
</head>

<body>
    <?php
    if (isset($_SESSION['erro'])) {
        echo $_SESSION['erro'];
        unset($_SESSION['erro']);
    }
    ?>
    <?php
    include 'component/header_2.php'
    ?>
    <div class="container" style="margin-bottom: 50px;background-color: #edeeef;border-radius: 10px;">
                <h2 style="font-size: 20px;font-family: 'Times New Roman', Times, serif;margin-bottom: 20px;margin-top: 20px;text-align: center;">ĐĂNG KÝ</h2>
                <form method="POST" action="./component/process_register.php" style="width: 80%;margin-left: 200px;">

                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;margin-bottom: 20px;">Họ và tên:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px;" type="text" class="form-control" name="name" placeholder="Nhập họ và tên...">
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;margin-bottom: 20px;">Địa Chỉ:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px;" type="text" class="form-control" name="address" placeholder="Nhập địa chỉ...">
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;margin-bottom: 20px;">Số điện thoại:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px;" type="number" class="form-control" name="phone_number" placeholder="Nhập số điện thoại...">
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;margin-bottom: 20px;">Email:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px;" type="email" class="form-control" name="email" placeholder="Nhập email...">
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;margin-bottom: 20px;" for="pwd">Mật khẩu:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px;" type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <button style="height: 50px;border-radius: 5px;margin-top: 10px;margin-bottom: 20px;" type="submit" class="btn btn-default">Đăng Ký</button>
                </form>
            </div>      
        </div>
    </div>

    <?php
    include 'component/footer.php'
    ?>
    <?php include('jquery.php') ?>
</body>

</html>