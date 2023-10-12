<?php 
include '../../backend/connect.php';
//truy vấn danh sách sản phẩm
$query = "SELECT * FROM sanpham";
$result = mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt</title>
    <link rel="stylesheet" href="css/read.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        img{
            width: 100px;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="../../../allcss/admin.css">
</head>

<body>
<div class="content">
        <h1><img src="../../../img/logo.png" alt="" style="width:10%"></h1>
        <nav>
            <a href="../index.php"><< Trang chủ</a>
            <a href="admin.php" style="color:red">Danh sách sản phẩm</a>
            <a href="catelory.php">Danh mục sản phẩm</a>
            <a href="create.php">Thêm sản phẩm</a>
            <a href="update.php">Cập nhật sản phẩm</a>
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
                        <a href="user.php">tài khoản cá nhân</a> 
                        <a href="logout.php" title="Logout">Đăng xuất</a>
                    </div>
                </a>
            </div>
        </div>
    </div> 
        <table class="bang">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Sửa sản phẩm</th>
                <th>Xóa sản phẩm</th>
            </tr>
            <?php
            //hiển thị danh sách sản phẩm từ database
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" .$row['id'] . "</td>";
                echo "<td>" .$row['tenSp'] . "</td>";
                echo "<td><img src=".$row['anhSp']."></td>";
                echo "<td>";
                echo " <a class='edit' href='update.php?id=" . $row['id'] ."'>Sửa</a> ";
                echo "</td>";
                echo "<td>";
                echo " <a href='delete.php?id=" . $row['id'] ."'>Xóa</a> ";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
</body>

</html>
<?php 
mysqli_close($connect);
?>