<?php
include '../backend/connect.php';
session_start();
//kiểm tra xem session user có tồn tại không
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../allcss/style.css">
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
            ?>Xin chào <?php echo  $_SESSION["username"];
                        echo "<br>";
                        echo "<a href ='../backend/logout.php'><i>Đăng xuất</i></a>";
                        ?>
        <?php
            } else {
                echo  "<button class='login'><a href='./login.php'>Đăng Nhập</a></button>";
                echo  "<button class='resigter'><a href='./resigter.php'>Đăng kí</a></button>";
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
                    <li><a href="" style="color:#fff; background:black; display:block;">Giới Thiệu</a></li>
                    <li><a href="./contact.php">Hỗ Trợ</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="body">
        <div id="body1">
            <div class="page">
                <h2>Chúng tôi là Xshop</h2>
                <h4>Chúng tôi mang đến những tiện ích cho bạn</h4>

                <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempord taphonh dpfhnphau ninh ndsfh.
                    incididunt ut labore et dol ore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempordskdhhhfhng907uyer
                    dskfj aoohgo hdfnh dfhna dhfdf
                    incididunt ut labore et dol ore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dol ore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dol ore magna aliqua. "</p>
            </div>
        </div>
        <div id="body2">
            <h1 style="font-weight :bold;">NHÀ SÁNG LẬP VÀ ĐIỀU HÀNH</h1>
            <div class="founder">
                <div class="founder-box">
                    <div class="founder-center">
                        <div id="founder-img" class="founder-img1"></div>
                        <h3 class="founder-name ">Steve Jobs</h3>
                        <h5 class="founder-line">Co-founder</h5>
                        <p class="founder-word">“We’re just enthusiastic about what we do.”</p>
                    </div>
                </div>
                <div class="founder-box">
                    <div class="founder-center">
                        <div id="founder-img" class="founder-img2"></div>
                        <h3 class="founder-name ">Jeff Bezos</h3>
                        <h5 class="founder-line">Co-founder</h5>
                        <p class="founder-word">“ Work hard, make fun, and make history. “</p>
                    </div>
                </div>
                <div class="founder-box">
                    <div class="founder-center">
                        <div id="founder-img" class="founder-img3"></div>
                        <h3 class="founder-name ">Bill Gate</h3>
                        <h5 class="founder-line">Co-founder</h5>
                        <p class="founder-word">“ Life is not fair, get used to it. ”</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="body3">
            <div class="body3-wrap">
                <div class="video-wrap">
                    <video src="../../img/Đà Nẵng nhìn từ trên cao 4K _ NguyenCuongFilm _ Cinematic (1).mp4" autoplay loop muted style="width: 100%;"></video>
                </div>
                <div class="commit">
                    <h1>OUR COMMIT</h1>
                    <p class="commit-line" style="color:white;"> Lorem ipsum dolor sit ame hingg hniennh hing cut, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dol ore magna aliqua. Lorem ipsum dolor sit ame hingg hniennh hing cut, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dol ore magna aliqua.
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