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
        <h1><img src="https://coyotelsp.com/cdn/shop/files/coyote-logo-main.png?v=1637698541" alt="" style="width:15%;margin-bottom:20px;"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php">Danh sách sản phẩm</a>
                    <a href="catelory.php">Danh mục sản phẩm</a>
                    <a href="create.php">Thêm sản phẩm</a>
        </nav>
        <div class="icon-z">
        </div>
    </div>

    <div class="sanpham">
        <h1 style="width:100%;background-color:#ccc;text-align:center; padding:12px 0px;">Sửa Sản Phẩm</h1>
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
            <a href="./admin.php">Quay Về Danh Mục</a>
            <span><?php echo $message; ?></span>
        </form>
    </div>
</body>

</html>