<?php

$soA = +$_GET['so_a'];
$soB = +$_GET['so_b'];

$kq = '';
if ($soA == 0) {
    if($soB == 0) {
        $kq = 'Phương trình có vô số nghiệm';
    } else {
        $kq = 'Phương trình vô nghiệm';
    }
} else {
    $result = -$soB / $soA;
    $kq = 'Nghiệm của phương trình là :' . $result;
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
    <h2>Kết quả: <?php echo $kq; ?> </h2>
    <a href="/we16307/lesson3_lab2/bai1/pt_bac_1.html">Quay lại</a>
</body>
</html>
