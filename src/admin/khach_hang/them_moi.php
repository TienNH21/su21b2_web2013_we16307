<?php

session_start();

require_once './../../db/khach_hang.php';
// $_POST, $_GET, $_SESSION/$_COOKIE, $_FILES

// Upload ảnh

/*
 * 1. Kiểm tra định dạng file
 * 2. Kiểm tra dung lượng file - File < 3M
 * 3. Lưu trữ file
 */

$fileUpload = $_FILES['avatar'];

/**
 * 1. Kiểm tra định dạng file
 * Kiểm tra chuỗi 'image' có trong &fileUpload['type']: ===
*/
/**
 * $fileUpload['type'] -> 'image/png',
 * 'image'
*/
$check = strpos($fileUpload['type'], 'image');
if ($check === FALSE) {
    // Không tìm thấy chuỗi image trong $fileUpload['type']
    // File upload không phải là file ảnh
    $_SESSION['error'] = 'Avatar phải là ảnh';
    header("Location: /we16307/src/admin/khach_hang/form_them_moi.php");
    die;
}

// 2. Kiểm tra dung lượng file - File < 3M
if ($fileUpload["size"] > 3000000) {
    // 3M -> 3 * 1000 Kb -> 3000 * 1000 byte -> 3,000,000
    $_SESSION['error'] = 'Ảnh phải nhỏ hơn 3M';
    header("Location: /we16307/src/admin/khach_hang/form_them_moi.php");
    die;
}

// 3. Lưu trữ file
$folderAnh = './../images/';
$anhLuu = $folderAnh . $fileUpload["name"];
move_uploaded_file($fileUpload['tmp_name'], $anhLuu);

$url = "/we16307/src/admin/images/" . $fileUpload["name"];

$ma = $_POST['ma'];
$ten = $_POST['ten'];
$gioiTinh = $_POST['gioi_tinh'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$diaChi = $_POST['dia_chi'];

$data = [
    'ma' => $ma,
    'ten' => $ten,
    'gioi_tinh' => $gioiTinh,
    'email' => $email,
    'sdt' => $sdt,
    'dia_chi' => $diaChi,
    'avatar' => $url,
];

insert($data);

header("Location: /we16307/src/admin/khach_hang/danh_sach.php");
