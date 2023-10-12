<?php
include '../../backend/connect.php';
//truy vấn danh sách sản phẩm
$message ="";
$infor ="";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $infor = $_POST['information'];
}
$query = "SELECT * FROM sanpham where theloaiSP = '$infor' ";
$result = mysqli_query($connect, $query);
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
        img {
            width: 100px;
            height: auto;
        }

        .search {
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .search-input {
            display: flex;
            width: 100%;

            /* Adjust the max width as needed */
        }

        .search-input input[type="text"] {
            flex: 1;
            width: 40vw;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }

        .search-input input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="../../../allcss/admin.css">
</head>

<body>
    <div class="content">
        <h1><img src="../../../img/logo.png" alt="" style="width:10%"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php">Danh sách sản phẩm</a>
                    <a href="delete.php" style="color:red">Danh mục sản phẩm</a>
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
    <div class="search">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="search-input">
                <input id="information" name="information" type="text" placeholder="Vui lòng nhập loại sản phẩm (mobile, tablet, laptop)!!">
                <input type="submit" value="Tìm kiếm">
            </div>
        </form>
        <span><?php echo $message;?></span>
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
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['tenSp'] . "</td>";
            echo "<td><img src=" . $row['anhSp'] . "></td>";
            echo "<td>";
            echo " <a class='edit' href='update.php?id=" . $row['id'] . "'>Sửa</a> ";
            echo "</td>";
            echo "<td>";
            echo " <a href='delete.php?id=" . $row['id'] . "'>Xóa</a> ";
            echo "</td>";
            echo "</tr>";
        }
        mysqli_close($connect);
        ?>
    </table>

</body>

</html>