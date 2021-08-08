<?php

require_once './../../db/khach_hang.php';

$data = [
    'id' => $_POST['id'],
    'ma' => $_POST['ma'],
    'ten' => $_POST['ten'],
    'gioi_tinh' => $_POST['gioi_tinh'],
    'email' => $_POST['email'],
    'sdt' => $_POST['sdt'],
    'dia_chi' => $_POST['dia_chi'],
];

update($data);
