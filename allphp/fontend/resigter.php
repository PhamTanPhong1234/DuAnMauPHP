<?php
include('../backend/connect.php');
session_start();
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $cfPass = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $check_query = "SELECT * FROM client WHERE username = '$username'";
    $result = $connect->query($check_query);
    if ($result->num_rows  > 0) {
        $message = "The account has been register already";
    } else if ($password !== $cfPass) {
        $message = "Mật khẩu không trùng nhau";
    }else{
        $insert_query = "INSERT INTO client (username, password, email, address) VALUE ('$username','$password' , '$email','$address')";
        if($connect->query($insert_query) == true){
            $message = 'thanh cong '."  <a href ='./login.php'>Đăng nhập ngay</a>";
        }else{
            $message = 'that bai';
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
    <link rel="shortcut icon" type="image/png" href="/../img/logo.png"/>
    <link rel="stylesheet" href="../../allcss/resigter.css">
</head>

<body>

    <form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="POST">
        <h1>Đăng Ký</h1>
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirmPassword">Xác nhận mật khẩu:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="address">Địa chỉ:</label>
        <textarea id="address" name="address" required></textarea><br>

        <input type="submit" value="Đăng Ký"> <br><br>
        <span><?php echo $message;?></span>
    </form>
   
</body>

</html>