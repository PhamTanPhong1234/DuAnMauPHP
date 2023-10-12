<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        a {
            margin-top: 30px;
            background-color: black;
            text-decoration: none;
            color: #fff;
            padding: 10px 30px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    echo "<h1>Đăng xuất thành công</h1>";
    session_start();
    session_destroy();
    ?><br>
    <a href="../fontend/login.php" title="login">Login</a>
    <br><br>
    <a href="../fontend/index.php" title="login"><<< Quay về trang chủ</a>

</body>

</html>