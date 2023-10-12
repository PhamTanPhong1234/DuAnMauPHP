
<?php
$servername = '127.0.0.1:3309';
$username = 'root';
$password = '';
$dbname = 'Xshop';

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Kết nối server thất bại: " . $connect->connect_error);
}
?>