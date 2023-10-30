<?php
include '../../backend/connect.php';
//truy vấn danh sách sản phẩm
$query = "SELECT * FROM sanpham";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm - Admin</title>
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
</head>

<body>
    <div class="content">
        <h1><img src="https://coyotelsp.com/cdn/shop/files/coyote-logo-main.png?v=1637698541" alt="" style="width:15%;margin-bottom:20px;"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php" style="color:blue">Danh sách sản phẩm</a>
                    <a href="catelory.php">Tìm sản phẩm</a>
                    <a href="create.php">Thêm sản phẩm</a>
        </nav>
        <div class="icon-z">
        </div>
    </div>
    <table class="bang">
        <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Sửa sản phẩm</th>
            <th>Xóa sản phẩm</th>
        </tr>
        <?php
        //hiển thị danh sách sản phẩm từ database
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['maSp'] . "</td>";
            echo "<td>" . $row['tenSp'] . "</td>";
            echo "<td><img src=" . $row['anhSp'] . "></td>";
            echo  "<td><p>" . $row['giaSp'] . "<span>.000</span><span>.000đ</span></p></td>";
            echo "<td><p>" . $row['soluong'] . "</p></td>";
            echo "<td>";
            echo " <a class='edit' href='update.php?id=" . $row['id'] . "'>Sửa</a> ";
            echo "</td>";
            echo "<td>";
            echo " <a href='delete.php?id=" . $row['id'] . "'>Xóa</a> ";
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