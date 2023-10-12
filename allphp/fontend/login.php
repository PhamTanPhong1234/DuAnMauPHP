<?php
include('../backend/connect.php');
session_start();
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $query = "SELECT * FROM client WHERE username = '$username'";
    $result = mysqli_query($connect, $query);
    $AdminQuery = "SELECT * FROM ad WHERE username = '$username'";
    $AdminResult = mysqli_query($connect, $AdminQuery);

    if (mysqli_num_rows($AdminResult) > 0) {
        $adrow = mysqli_fetch_assoc($AdminResult);
        if ($adrow['password'] === $password) {
            $_SESSION["username"] = "$username";
            header("Location: ../fontend/admin/admin.php");
        } else {
            $message = "Sai mật khẩu ";
        }
    } else if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] === $password) {
            $_SESSION["username"] = "$username";
            header("Location: ../fontend/index.php");
        } else {
            $message = "Sai mật khẩu";
        }
    }
    mysqli_close($connect);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Nhập</title>
    <link rel="stylesheet" href="../../allcss/login.css">
</head>

<body>
    <span><?php echo $message; ?></span>
    <div class="container">
        <h1>Đăng Nhập</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password">
            <br>
            <button type="submit">Đăng Nhập</button>
        </form>
        <p>Chưa có tài khoản? <a href="./resigter.php">Đăng ký ngay</a></p>
    </div>
</body>

</html>