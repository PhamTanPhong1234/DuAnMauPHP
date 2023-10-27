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
    <title>Giỏ Hàng - X Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../allcss/style.css">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="../../../img/logo.png" />
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
                echo "Xin chào " . $_SESSION["username"] . "<br>";
                echo "<a href='../../backend/logout.php'><i>Đăng xuất</i></a> ";

                if ($row["username"] == $_SESSION["username"]) {
                    echo "<a href='../admin/admin.php' style = 'color: blue;'> Trang quản trị</a>";
                }
            } else {
                echo "<button class='login'><a href='../login.php'>Đăng Nhập</a></button>";
                echo "<button class='resigter'><a href='../resigter.php'>Đăng kí</a></button>";
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
                    <li><a href="">Sản Phẩm</a></li>
                    <li><a href="../present.php">Giới Thiệu</a></li>
                    <li><a href="../contact.php">Hỗ Trợ</a></li>
                    <li><a href="./cart.php" style="color:#fff; background:black; display:block;"><i class="fa-solid fa-cart-shopping"></i></a></li>

                </ul>
            </div>
        </div>
    </header>
    <div class="container">
            <form action=""></form>
    </div>
