<?php
include '../backend/connect.php';
session_start();
$query = "SELECT * FROM ad";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - X Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../allcss/style.css">
    <link rel="stylesheet" href="../../allcss/contact.css">
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
                    <li><a href="./index.php">Trang Chủ</a></li>
                    <li><a href="../fontend/client/productC.php">Sản Phẩm</a></li>
                    <li><a href="./present.php">Giới Thiệu</a></li>
                    <li><a href="" style="color:#fff; background:black; display:block;">Hỗ Trợ</a></li>
                    <li><a href="./client/cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="slider">
        <div class="slider">
            <div id="title">
                <p class="title">CONTACT US</p>
                <p class="page">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dol ore magna aliqua. </p>
                <button class="hover">
                    Contact Now
                </button>
            </div>
        </div>
    </div>
    <div id="body">
        <div id="body1">
            <div class="address">
                <div class="text-box">
                    <h4 class="infor">Visit Our Office</h4>
                    <p>56/8, bir uttam qazi nuruzzaman road,
                        west panthapath, kalabagan, Dhanmondi, Dhaka - 1205</p>
                </div>
                <div class="text-box">
                    <h4 class="infor">Let’s call us</h4>
                    <p>Phone 01: 012-6532-568-9746
                        <br>Phone 02: 012-6532-568-9748 <br>FAX: 02-6532-568-746
                    </p>
                </div>
                <div class="text-box">
                    <h4 class="infor">Let’s Email Us</h4>
                    <p>hello@colorlib.com
                        <br>mainhelpinfo@colorlib.com
                        <br>infohelp@colorlib.com
                    </p>
                </div>
                <div class="text-box">
                    <h4 class="infor">Customer Support</h4>
                    <p>support@colorlib.com
                        <br>emergencysupp@colorlib.com
                        <br> extremesupp@colorlib.com
                    </p>
                </div>
            </div>
        </div>
        <div class="line-body">
            <div class="line">
                <hr>
            </div>
            <h1>Or</h1>
            <div class="line">
                <hr>
            </div>
        </div>
        <div id="body2">
            <div class="body2-wrap">
                <div class="video-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245367.87556391515!2d107.91331385924296!3d16.072075930032714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1687004927397!5m2!1svi!2s" width="100%" height="100%" style="border:1px solid rgb(64, 63, 63);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="commit">
                    <form action="">
                        <h1>Write the questions here and we come back ASAP.</h1>
                        <input id="name" class="Fname" type="text" placeholder="First Name"><br>
                        <input id="name" class="Lname" type="text" placeholder="Last Name"><br>
                        <input id="name" class="email" type="email" placeholder="Email"><br>
                        <input id="name" class="questions" type="text" placeholder="Write your questions"><br>
                        <input id="button" type="button" value="Summit">
                    </form>
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