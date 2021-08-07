<?php

require_once './../../db/khach_hang.php';
$id = $_GET['id'];
deleteById($id);

header("Location: /we16307/src/admin/khach_hang/danh_sach.php");
