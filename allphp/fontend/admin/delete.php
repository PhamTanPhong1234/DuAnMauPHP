<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa - Admin</title>
    <link rel="shortcut icon" type="image/png" href="/../img/logo.png" />
    <link rel="stylesheet" href="css/read.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        img {
            width: 100px;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="../../../allcss/admin.css">
    <link rel="stylesheet" href="../../../allcss/update.css">
</head>

<body>
    <div class="content">
        <h1><img src="../../../img/logo.png" alt="" style="width:10%"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php"> Danh sách sản phẩm</a>
                    <a href="catelory.php">Danh mục sản phẩm</a>
                    <a href="create.php">Thêm sản phẩm</a>
        </nav>
        <div class="icon-z">
            <div class="icon">
                <a href="cart.php">
                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                </a>
            </div>
            <div class="settings-icon">
                <a href="setting.php">
                    <i class="fas fa-bars"></i>
                    <div class="caidat" id="setting-caidat">
                        Cài đặt
                        <a href="user.php">tài khoản cá nhân</a>
                        <a href="logout.php" title="Logout">Đăng xuất</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
//kiểm tra xem có id được truyển vào kh
if (isset($_GET['id'])) {
    include '../../backend/connect.php';
    //lấy giá trị id từ tham số truyền vào
    $id = $_GET['id'];
    //truy vấn id để xóa dữ liệu
    $query = "DELETE FROM sanpham WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    //kiểm tra truy vấn
    if ($result) {
        echo "Xóa sản phẩm thành công!";
        echo "<br><br>";
        echo "<a href= 'admin.php'> <<< Quay lại danh sách sản phẩm </a>";
    } else {
        echo "Có lỗi xảy ra" . mysqli_error($connect);
    }
    //đóng kết nối
    mysqli_close($connect);
} else {
    echo "Không tìm thấy sản phẩm để xóa, <br> vui lòng kiểm tra lại!";
}
?>