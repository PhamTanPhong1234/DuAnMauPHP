<?php
session_start();
include '../backend/connect.php';
$query = "SELECT * FROM ad";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang Chủ - X Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../allcss/style.css">
    <link rel="shortcut icon" type="image/png" href="/../img/logo.png"/>
    <script src="../../allJs/index.js"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>


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
                echo "Xin chào " . $_SESSION["username"] . "<br>";
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
                    <li><a href="" style="color:#fff; background:black; display:block;">Trang Chủ</a></li>
                    <li><a href="../fontend/client/productC.php">Sản Phẩm</a></li>
                    <li><a href="./present.php">Giới Thiệu</a></li>
                    <li><a href="./contact.php">Hỗ Trợ</a></li>
                    <li><a href="./client/cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="slide">
        <div class="slide-wrap">
            <div class="slide slide1"></div>
            <div class="slide slide2"></div>
            <div class="slide slide3"></div>
            <div class="slide slide4"></div>
        </div>
    </div>
    <div id="dot">
        <div class="dot dotAni"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <div id="body">
        <div id="body-present">
            <div class="body-present">
                <div id="present-box" class="present1">
                    <div class="element-1">
                        <div id="img"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/v/n/vn_iphone_15_blue_pdp_image_position-1a_blue_color_1_4.jpg" alt="">
                        </div>
                        <div class="present-title">
                            <a href="">THÁCH THỨC SỰ NHÀM CHÁN</a>
                        </div>
                        <p class="present-paraphagh">
                            Hãy để cả thế giới thấy bạn là ai với Bộ sưu tập Pebble 2. Chuột và bàn phím tròn, mỏng
                            được thiết kế tối giản để trở nên nổi bật.
                        </p>
                        <div class="access-title">
                            <a style="color: #2F3132; font-weight: 600;" href="">IPHONE 15 PRO MAX</a><i class="fa-solid fa-angle-right"></i>
                        </div>

                    </div>
                </div>
                <div id="present-box" class="present2">
                    <div class="element-1">
                        <div id="img"><img src="https://mihome.vn/wp-content/uploads/2020/11/xiaomi-mimix-2-1.jpg" alt=""></div>
                        <div class="present-title">
                            <a href="">HÃY NÂNG CAO TÂM TRẠNG</a>
                        </div>
                        <p class="present-paraphagh">
                            với chuột công thái học Lift Vertical
                        </p>
                        <div class="access-title">
                            <a style="color: #2F3132; font-weight: 600;" href="">XIAOMI MI MIX 2</a><i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div id="present-box" class="present3">
                    <div class="element-1">
                        <div id="img"><img src="https://bizweb.dktcdn.net/100/408/235/products/lenovo-x1-nano-gen-2-2.jpg?v=1664250565340" alt=""></div>
                        <div class="present-title">
                            <a href="">RÕ RÀNG HƠN. TƯƠI SÁNG HƠN. TỐT HƠN.</a>
                        </div>
                        <p class="present-paraphagh">
                            Hình ảnh, âm thanh và họp mặt tốt hơn với Brio 100 - một webcam đơn giản và có giá thành
                            phải chăng cho phép bạn thể hiện bản thân tốt nhất trong các cuộc gọi video. </p>
                        <div class="access-title">
                            <a style="color: #2F3132; font-weight: 600;" href="">LENOVO THINK PAD 2</a><i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="body3" style="height:30%;">
            <div class="title">
                <h1 class="review-title" style="text-transform:uppercase; font-weight: 600;">Đánh giá gần đây</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    utlabore et dolore magna aliqua. </p>
            </div>
            <div class="flex-box-review">
                <div class="review">
                    <div class="img1"></div>
                    <h4>"It's really worth the money"</h4>
                    <p class="mini-page">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt utlabore et dolore magna aliqua.</p>
                    <hr>
                    <div class="avatar">
                        <div class="pic1"></div>
                        <p class="name">UyenThucute22</p>
                        <p class="date">31/8/2023</p>
                    </div>
                    <hr>
                </div>
                <div class="review">
                    <div class="img2"></div>
                    <h4>"It's really worth the money"</h4>
                    <p class="mini-page">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod
                        tempor incididunt utlabore et dolore magna aliqua.</p>
                    <hr>
                    <div class="avatar">
                        <div class="pic2"></div>
                        <p class="name">UyenThucute22</p>
                        <p class="date">31/8/2023</p>
                    </div>
                    <hr>
                </div>
                <div class="review">
                    <div class="img3"></div>
                    <h4>"It's really worth the money"</h4>
                    <p class="mini-page">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt utlabore et dolore magna aliqua.</p>
                    <hr>
                    <div class="avatar">
                        <div class="pic3"></div>
                        <p class="name">UyenThucute22</p>
                        <p class="date">31/8/2023</p>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
        <div id="body4">
            <div class="address">
                <div class="text-box">
                    <h4 class="infor">Liên Hệ Trực Tiếp</h4>
                    <p>56/8, bir uttam qazi nuruzzaman road,
                        west panthapath, kalabagan, Dhanmondi, Dhaka - 1205</p>
                </div>
                <div class="text-box">
                    <h4 class="infor">Hãy gọi cho chúng tôi</h4>
                    <p>Phone 01: 012-6532-568-9746
                        <br>Phone 02: 012-6532-568-9748 <br>FAX: 02-6532-568-746
                    </p>
                </div>
                <div class="text-box">
                    <h4 class="infor">Liên lạc với chúng tôi</h4>
                    <p>hello@colorlib.com
                        <br>mainhelpinfo@colorlib.com
                        <br>infohelp@colorlib.com
                    </p>
                </div>
                <div class="text-box">
                    <h4 class="infor">Hỗ Trợ Khách Hàng</h4>
                    <p>support@colorlib.com
                        <br>emergencysupp@colorlib.com
                        <br> extremesupp@colorlib.com
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div id="footer">
        <div class="footer-infor">
            <div class="site-box">
                <a href="">Present</a><br>
                <a href="">website privacy policy</a><br>
                <a href="">Investors</a> <br>
                <a href="">Email Options</a>
            </div>
            <div class="site-box">
                <a href="">Contact</a><br>
                <a href="">Privacy Policy
                </a><br>
                <a href="">terms of use</a> <br>
                <a href=""></a>
            </div>
            <div class="site-box">
                <a href="">Sustainability</a><br>
                <a href="">Cookie settings</a><br>
                <a href="">Sustainability</a> <br>
                <a href=""></a>
            </div>
            <div class="site-box">
                <a href="">Dev Cooperation Department</a><br>
                <a href="">Sitemap</a><br>
                <a href="">Recycling</a> <br>
                <a href="">Email Options</a>
            </div>
        </div>
        <div class="footer-icon">
            <div class="box">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <i style="text-transform: capitalize; margin-top: 100px; font-size: 15px;">© 2023 Xshop. All rights
                reserved.</i>
        </div>

    </div>
</body>

</html>