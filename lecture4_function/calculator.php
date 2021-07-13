<?php

function kiemTraForm() {
    // Kiểm tra toán hạng & toán tử cùng tồn tại mới thực hiện phép tính
    if (
        isset( $_GET['so_thu_nhat'] ) &&
        isset( $_GET['so_thu_hai'] ) &&
        isset( $_GET['toan_tu'] )
    ) {
        // Kiểm tra số bị chia khác 0
        if (
            ($_GET['toan_tu'] == 'chia' || $_GET['toan_tu'] == 'chia_du') &&
            $_GET['so_thu_hai'] == 0
        ) {
            return false;
        }

        return true;
    }

    return false;
}

function cong($a, $b) {
    return $a + $b;
}

function tru($a, $b) {
    return $a - $b;
}

function nhan($a, $b) {
    return $a * $b;
}

function chia($a, $b) {
    return $a / $b;
}

function chiaDu($a, $b) {
    return $a % $b;
}

$kiemTra = kiemTraForm();
if ($kiemTra == true) {
    $soThuNhat = intval( $_GET['so_thu_nhat'] );
    $soThuHai = intval( $_GET['so_thu_hai'] );
    $toanTu = $_GET['toan_tu'];

    $kq = 0;
    switch ($toanTu) {
        case 'cong':
            $kq = cong($soThuNhat, $soThuHai);
            break;

        case 'tru':
            $kq = tru($soThuNhat, $soThuHai);
            break;

        case 'nhan':
            $kq = nhan($soThuNhat, $soThuHai);
            break;

        case 'chia':
            $kq = chia($soThuNhat, $soThuHai);
            break;

        case 'chia_du':
            $kq = chiaDu($soThuNhat, $soThuHai);
            break;

        default:
            break;
    }

    echo $kq;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="GET" action="/we16307/lecture4_function/calculator.php">
        <div>
            <label>Số thứ nhất</label>
            <input type="number" name="so_thu_nhat" />
        </div>
        <div>
            <label>Số thứ hai</label>
            <input type="number" name="so_thu_hai" />
        </div>
        <button name="toan_tu" value="cong">+</button>
        <button name="toan_tu" value="tru">-</button>
        <button name="toan_tu" value="nhan">*</button>
        <button name="toan_tu" value="chia">/</button>
        <button name="toan_tu" value="chia_du">%</button>
    </form>

    <h2>Kết quả: </h2>
</body>
</html>
