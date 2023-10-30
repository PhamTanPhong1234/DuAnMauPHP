<?php
include '../../backend/connect.php';
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
    <title>Sản Phẩm - X Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../allcss/style.css">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="../../../img/logo.png"/>
    <link rel="stylesheet" href="../../../allcss/product.css">
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
                echo "<a href='../../backend/logout.php'><i>Đăng xuất</i></a> ";

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
                    <li><a href="" style="color:#fff; background:black; display:block;">Sản Phẩm</a></li>
                    <li><a href="../present.php">Giới Thiệu</a></li>
                    <li><a href="../contact.php">Hỗ Trợ</a></li>
                    <li><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>

                </ul>
            </div>
        </div>
    </header>
    <div id="cata">
        <div class="catalories">
            <h3 style="cursor:context-menu;">Danh mục sản phẩm</h3>
            <ul>
                <li><a href="#" onclick="thaydoiIframe('../admin/mobile.php')">Điện Thoại</a></li>
                <li><a href="#" onclick="thaydoiIframe('../admin/laptop.php')">Laptop</a></li>
                <li><a href="#" onclick="thaydoiIframe('../admin/tablet.php')">Máy tính bảng</a></li>
            </ul>
        </div>
        <iframe id="myIframe" src="../admin/product.php" frameborder="0"></iframe>
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
<script>
    function thaydoiIframe(url) {
        var iframe = document.getElementById('myIframe');
        iframe.src = url;
    }
</script>