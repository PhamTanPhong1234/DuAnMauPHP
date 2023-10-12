<?php
include '../../backend/connect.php';
session_start();
//kiểm tra xem session user có tồn tại không  <?php
$query = "SELECT * FROM sanpham where theloaiSP = 'tablet'";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../allcss/style.css">
    <link rel="stylesheet" href="../../../allcss/product.css">
    <link rel="stylesheet" href="../../../allcss/productC.css">
    <script src="../../allJs/index.js"></script>


</head>

<body>

    <?php

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
    <div class="container">
        <div class="col"> 
            <div class="im-product">
                <img src="' . $row['anhSp'] . '" alt="">
            </div>
            <div class="name-product">
                <h1>' . $row['tenSp'] . '</h1>
            </div>
            <div class="maSp">
                <p><span>Code:</span>' . $row['maSp'] . ' </p>
            </div>
            <div class="theloaiSp">
                <p><span>Thể loại:</span> ' . $row['theloaiSp'] . ' </p>
            </div>
            <div class="giaSp">
                <p><span>Giá:</span> ' . $row['giaSp'] . ' <span>.000đ</span></p>
            </div>
            <div class="soluong">
                <p><span>Số lượng:</span> ' . $row['soluong'] . '</p>
            </div>
        </div>
    </div> ';
    }
    ?>
</body>

</html>