<?php

require_once './../../db/khach_hang.php';

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
];

insert($data);

header("Location: /we16307/src/admin/khach_hang/danh_sach.php");
