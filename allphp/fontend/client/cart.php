<?php
include '../../backend/connect.php';
session_start();
$query = "SELECT * FROM ad";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST['username'];
    $address = $_POST['address'];
    $sdt = $_POST['number'];
    if (empty($ten) || empty($address) || empty($sdt)) {
        $message = 'Vui lòng điền đầy đủ thông tin';
    } else {
        $message = "Đặt hàng thành công";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng - X Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../allcss/style.css">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="../../../img/logo.png" />
    <link rel="stylesheet" href="../../../allcss/product.css">
    <link rel="stylesheet" href="../../../allcss/cart.css">
    <script src="../../allJs/index.js"></script>
</head>

<body>
    <div class="mini-header">
        <div class="location">
            <i class="fa-solid fa-earth-americas"></i>
            <a href="" style="line-height: 40px;">Việt Nam</a>
        </div>
        <div class="label">
        <?php
            if (isset($_SESSION['username'])) {
                echo " Xin chào<span style ='color:red ; text-transform:uppercase'> " . $_SESSION["username"] . "</span><br>";
                echo "<a href='../backend/logout.php'><i>Đăng xuất</i></a> ";

                if ($row["username"] == $_SESSION["username"]) {
                    echo "<a href='./admin/admin.php' style = 'color: blue;'> Trang quản trị</a>";
                }
            } else {
                echo "<button class='login'><a href='./login.php'>Đăng Nhập</a></button>";
                echo "<button class='resigter'><a href='./resigter.php'>Đăng kí</a></button>";
            }
            ?>
        </div>
    </div>
    </div>
    <header>
        <div style="width : 80%; height:50px; margin:0 auto ;display:flex; Justify-content: space-between ;">
            <div class="logo" style="width: 30%;"><img src="https://coyotelsp.com/cdn/shop/files/coyote-logo-main.png?v=1637698541" alt="" style="width:170px;"></div>
            <div class="navigation">
                <ul>
                    <li><a href="../index.php">Trang Chủ</a></li>
                    <li><a href="./productC.php">Sản Phẩm</a></li>
                    <li><a href="../present.php">Giới Thiệu</a></li>
                    <li><a href="../contact.php">Hỗ Trợ</a></li>
                    <li><a href="./cart.php" style="color:#fff; background:black; display:block;"><i class="fa-solid fa-cart-shopping"></i></a></li>

                </ul>
            </div>
        </div>
    </header>


    <?php
    if (isset($_SESSION["username"])) {
        echo '<div class="container">
        <div class="l1 form1">
            <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]);
        echo  '?>" method = "POST">
                <h2>Thông Tin Liên Hệ</h2>
                <label for="username">Tên: </label>
                <input type="text" name="username">
                <label for="address">Địa Chỉ: </label>
                <input type="text" name="address">
                <label for="address">Số Điện Thoại: </label>
                <input type="text" name="number">
                <label for="">Hình Thức Thanh Toán: </label>
                <div class="payment-method">
                    <input type="radio" id="credit" name="payment" value="credit">
                    <label for="credit">Thẻ Tín Dụng</label>
                    <input type="radio" id="paypal" name="payment" value="paypal">
                    <label for="paypal">Apple Pay</label>
                    <input type="radio" id="paypal" name="payment" value="paypal">
                    <label for="paypal">Thanh toán Khi Nhận Hàng</label>
                </div>
                <input type="submit" value="Đặt Hàng">';
        echo '<span>' . $message . '</span>';
        echo  '</form>
        </div>
        <div class="l1 table">
            <h2 style="margin-top:10px;">Đơn Hàng</h2>
            <table>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                </tr>
                <tr>
                    <td>TAP2</td>
                    <td>Apple Ipad pro 2020</td>
                    <td>23.000.000đ</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>AM1</td>
                    <td>Apple Macbook Air M1 </td>
                    <td>23.000.000đ</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>LAS2</td>
                    <td>Asus Zenbook 14 Oled</td>
                    <td>25.000.000đ</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>MAP2</td>
                    <td>Iphone 15 Pro Max</td>
                    <td>33.000.000đ</td>
                    <td>2</td>
                </tr>
            </table>
        </div>
    </div>';
    } else {
        echo '<div class="err">
        <div class="errbox">
            <h3> Bạn Phải đăng nhập để sử dụng giỏ hàng</h3>
            <a href="../login.php">Đăng Nhập</a><br>
            <i>nếu chưa có tài khoản <a href="../resigter.php">Đăng Kí Ngay</a></i>
        </div>
    </div>';
    }
