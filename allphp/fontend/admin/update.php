<?php
include '../../backend/connect.php';
$message = "";  

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // hiển thị giá trị cho dễ chỉnh sửa
    $tenSp = $_POST['tenSp'];
    $theloaiSp = $_POST['theloaiSp'];
    $soLuong = $_POST['soLuong'];
    $price = $_POST['price'];

    $query = "UPDATE sanpham SET tenSp = '$tenSp', soluong = '$soLuong', theloaiSp = '$theloaiSp', giaSp = '$price' WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('Location: admin.php');
    } else {
        $message = "Có lỗi xảy ra" . mysqli_error($connect);
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    /* hiển thị thông tin */
    $screenQuery = "SELECT * FROM sanpham where id = '$id'";
    $screenResult = mysqli_query($connect, $screenQuery);
    $rowF = mysqli_fetch_assoc($screenResult);
    $name = $rowF['tenSp'];
    $theloai = $rowF['theloaiSp'];
    $price = $rowF['giaSp'];
    $so = $rowF['soluong'];
    /* hiển thị thông tin */
    $query = "SELECT * FROM sanpham WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result == true) {
        $row = mysqli_fetch_assoc($result);
        $tenSp = $row['tenSp'];
        $target_dir = $row['anhSp'];
        $soLuong = $row['soluong'];
        $theloaiSp = $row['theloaiSp'];
    } else {
        $message = "Có lỗi xảy ra" . mysqli_error($connect);
    }
    mysqli_close($connect);
} else {
    $message = "Không tìm thấy sản phẩm để cập nhật!";
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update - Admin</title>
    <link rel="stylesheet" href="../../../allcss/style.css">
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
        <h1><img src="../../../img/logo.png" alt="" style="width: 10%"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php">Danh sách sản phẩm</a>
                    <a href="catelory.php">Danh mục sản phẩm</a>
                    <a href="create.php">Thêm sản phẩm</a>
                    <a href="update.php" style="color: red">Cập nhật sản phẩm</a>
                    <a href="delete.php">Xóa sản phẩm</a>
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
                        <a href="user.php">Tài khoản cá nhân</a>
                        <a href="logout.php" title="Logout">Đăng xuất</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="sanpham">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
            <label for="tenSp">Tên sản phẩm</label>
            <input type="text" name="tenSp" id="tenSp" required value="<?php echo $name ?>">
            <label for="theloaiSp">Loại Sản Phẩm</label>
            <input type="text" name="theloaiSp" id="theloaiSp" required value="<?php echo $theloai ?>">
            <label for="price">Giá Tiền</label>
            <input type="text" name="price" id="price" required value="<?php echo $price ?> ">
            <label for="soLuong">Số lượng sản phẩm</label>
            <input type="text" name="soLuong" id="soLuong" required value="<?php echo $so ?>">
            <input type="submit" name="submit" value="Cập nhật sản phẩm"><br><br>
            <span><?php echo $message; ?></span>
        </form>
    </div>
</body>

</html>