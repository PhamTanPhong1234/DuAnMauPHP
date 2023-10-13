<?php
include '../../backend/connect.php';
$message = "";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tenSp = $_POST['tenSp'];
    $theloaiSp = $_POST['theloaiSp'];
    $soLuong = $_POST['soLuong'];
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
    $uploadok = 1;
    $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        $message = "File đã tồn tại";
        $uploadok = 0;
    }
    //kiểm tra kích thước file
    if ($_FILES["filetoupload"]["size"] > 500000) {
        $message = "File ảnh quá lớn";
        $uploadok = 0;
    }
    //kiểm tra định dạng file
    if ($imagefiletype != "jpeg" && $imagefiletype != "png" && $imagefiletype != "jpg" && $imagefiletype != "gif") {
        $message = "Chỉ chấp file PNG, JPG, JPEG và GIF";
        $uploadok = 0;
    }
    //kiểm tra nếu upload ok = 0, tức là có lỗi xảy ra
    if ($uploadok == 0) {
        $message = "Tệp tin không được tải lên";
    } else {
        //di chuyển file từ mục tạm lên chính
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
            //lấy địa chỉ ảnh sau khi đã upload thành công
            $path = $target_dir . basename($_FILES["filetoupload"]["name"]);
            //chèn vào bảng sản phẩm
            $query = "UPDATE sanpham SET tenSp = '$tenSp', anhSp = '$path', soluong = '$soLuong', theloaiSp = '$theloaiSp' WHERE id = '$id'";
            $result = mysqli_query($connect, $query);
            //kiểm tra truy vấn
            if ($result) {
                $message = "Cập nhật sản phẩm thành công!";
            } else {
                $message = "Có lỗi xảy ra" . mysqli_error($connect);
            }
        } else {
            $message = "Có lỗi xảy ra khi tải file lên";
        }
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM sanpham WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    //kiểm tra truy vấn
    if ($result == true) {
        $row = mysqli_fetch_assoc($result);
        $tenSp = $row['tenSp'];
        $target_dir = $row['anhSp'];
        $soLuong =$row['soluong'];
        $theloaiSp =$row['theloaiSp'];
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
    <title>Cài đặt</title>
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
            <input type="text" name="tenSp" id="tenSp" required>
            <label for="theloaiSp">Loại Sản Phẩm</label>
            <input type="text" name="theloaiSp" id="theloaiSp" required>
            <label for="soLuong">Số lượng sản phẩm</label>
            <input type="text" name="soLuong" id="soLuong" required>
            <input type="file" name="filetoupload" id="filetoupload">
            <input type="submit" name="submit" value="Cập nhật sản phẩm"><br><br>
            <span><?php echo $message ;?></span>
        </form>
    </div>
</body>
</html>
