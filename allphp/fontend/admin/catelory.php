<?php
include '../../backend/connect.php';

$message = "";
$imessage = "";
$infor = "";
$result = "";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $infor = $_POST['information'];
}

$message = '';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/../img/logo.png" />
    <title>Danh Mục Sản Phẩm - Admin</title>
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
        <h1><img src="https://coyotelsp.com/cdn/shop/files/coyote-logo-main.png?v=1637698541" alt="" style="width:15%;margin-bottom:20px;"></h1>
        <nav>
            <a href="../index.php">
                << Trang chủ</a>
                    <a href="admin.php">Danh sách sản phẩm</a>
                    <a href="catelory.php" style="color:blue">Danh mục sản phẩm</a>
                    <a href="create.php">Thêm sản phẩm</a>
        </nav>
        <div class="icon-z">
        </div>
    </div>
    </div>
    <div class="search">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="search-input">
                <input id="information" name="information" type="text" placeholder="Vui lòng nhập loại hoặc mã sản phẩm!">
                <input type="submit" value="Tìm kiếm">
            </div>
        </form>
        <span><?php echo $message; ?></span>
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
        $Iquery = "SELECT * FROM sanpham WHERE maSp = '$infor'";
        $Iresult = mysqli_query($connect, $Iquery);
        $query = "SELECT * FROM sanpham WHERE theloaiSp = '$infor'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($Iresult) > 0) {
            while ($row = mysqli_fetch_assoc($Iresult)) {
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
        } else if (mysqli_num_rows($result) > 0) {
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
        } else {
            $imessage = "Không tìm thấy nội dung tìm kiếm !!";
        };
        ?>
    </table>
    <?php if ($_SERVER['REQUEST_METHOD'] === "POST") {
        echo "<br>";
        echo "<span style='color:red;'>" . $imessage . "</span>";
    }
    ?>
</body>

</html>
<?php mysqli_close($connect) ?>