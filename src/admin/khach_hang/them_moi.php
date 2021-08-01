<?php

$ma = $_POST['ma'];
$ten = $_POST['ten'];
$gioiTinh = $_POST['gioi_tinh'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$diaChi = $_POST['dia_chi'];

/*
 * B1: Tạo kết nối tới CSDL
 */
$dbUrl = "mysql: host=localhost; dbname=we16307";
$dbUser = "root";
$dbPass = "";

$connection = new PDO($dbUrl, $dbUser, $dbPass);

$sql = "INSERT INTO khach_hang(ma, ten, sdt, dia_chi, gioi_tinh, email) VALUES ()";

/*
 * BTVN: Hiển thị danh sách Sản phẩm, danh sách hóa đơn
 */
