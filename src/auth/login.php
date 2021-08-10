<?php

session_start();

require_once './../db/nhan_vien.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = login($email, $password);

if ( empty($data) == true ) {
    $error = "Sai tài khoản hoặc mật khẩu";

    $_SESSION['error'] = $error;

    header("Location: /we16307/src/auth/login_form.php");
    die;
}

$_SESSION['user'] = $data;
header("Location: /we16307/src/admin/khach_hang/danh_sach.php");
