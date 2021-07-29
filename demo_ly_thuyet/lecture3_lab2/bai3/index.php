<?php
// Xử lý yêu cầu
// var_dump($_POST); die;
$soBatDau = +$_POST['so_bat_dau'];
$soKetThuc = +$_POST['so_ket_thuc'];
$result = [];
$dem = 0;

for ($i = $soBatDau; $i <= $soKetThuc; $i++) {
    if ($i % 2 == 0) {
        $result[$dem] = $i;
        $dem++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < count($result); $i++) { ?>
            <li> <?php echo $result[$i]; ?> </li>
        <?php } ?>
    </ul>
    <a href="/we16307/lesson3_lab2/bai3/index.html">Quay lại</a>
</body>
</html>
