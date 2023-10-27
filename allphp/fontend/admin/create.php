<?php
include '../../backend/connect.php';
session_start();
$message ="";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tenSp = $_POST['tenSp'];
    $message = "";
    $target_dir = "./uploads/";
    $giaSp = $_POST['giaSp'];
    $maSp = $_POST['maSp'];
    $theloaiSp = $_POST['theloaiSp'];
    $soluong = $_POST['soluong'];

    $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
    //gán trạng thái upload  = 1
    $uploadok = 1;
    //lấy định dạng ảnh
    $imageFiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //Kiểm tra xem file đã đúng tồn tại chưa
    if (file_exists($target_file)) {
        $message = "Ảnh đã tồn tại";
        $uploadok = 0;
    }
    //kiểm tra kích thước file
    if ($_FILES["filetoupload"]["size"] > 500000) {
        $message = "Ảnh tải lên quá lớn";
        $uploadok = 0;
    }

    if ($imageFiletype != "jpg" && $imageFiletype != "png" && $imageFiletype != "jpeg" && $imageFiletype != "gif") {
        $message = "Chỉ chấp nhận file PNG,JPEG,JPG và GIF";
        $$uploadok = 0;
    } else {

        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {

            $path = $target_dir . basename($_FILES["filetoupload"]["name"]);
            $query = "INSERT INTO sanpham (tenSp,anhSp,giaSp,maSp,theloaiSp,soluong) VALUE ('$tenSp','$path','$giaSp','$maSp','$theloaiSp','$soluong')";
            $result = mysqli_query($connect, $query);
            if ($result) {
                $message = "Thêm sản phẩm thành công";
            } else {
                $message = "Có lỗi xảy ra" . mysqli_error($connect);
            }
        } else {
            $message = "Có lỗi xảy ra khi tải file lên";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm - Admin</title>
    <link rel="shortcut icon" type="image/png" href="/../img/logo.png" />
    <link rel="stylesheet" href="css/read.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        img {
            width: 100px;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="../../../allcss/create.css">
    <link rel="stylesheet" href="../../../allcss/admin.css">

</head>

<body>
    <div class="content">
        <h1><img src="https://coyotelsp.com/cdn/shop/files/coyote-logo-main.png?v=1637698541" alt="" style="width:15%;margin-bottom:20px;"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php">Danh sách sản phẩm</a>
                    <a href="catelory.php">Danh mục sản phẩm</a>
                    <a href="create.php" style="color:blue">Thêm sản phẩm</a>
        </nav>
        <div class="icon-z">
        </div>
    </div>
    </div>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="maSp">Mã sản phẩm</label>
        <input type="text" name="maSp" id="maSp"><br>
        <label for="tenSp">Tên sản phẩm</label>
        <input type="text" name="tenSp" id="tenSp" required>
        <input type="file" name="filetoupload" id="filetoupload"><br>
        <label for="giaSp">Giá sản phẩm</label>
        <input type="text" name="giaSp" id="giaSp"><br>
        <label for="theloaiSp">Thể loại sản phẩm</label>
        <input type="text" name="theloaiSp" id="theloaiSp"><br>
        <label for="soluong">Số lượng</label><br>
        <input type="text" name="soluong" id="soluong"><br>
        <input type="submit" name="submit" value="Upload file" id="submit"><br><br>
        <span style="color:red"><?php echo $message; ?></span>
    </form>

</body>

</html>