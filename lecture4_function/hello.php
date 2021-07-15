<?php

require_once './utils.php';
/*
 * TODO: Tìm hiểu các lệnh sau, chỉ rõ sự khác biệt
 * require
 * require_once
 * include
 * include_once
 *
 * https://viettuts.vn/php/include_once-va-require_once-trong-php
 * https://freetuts.net/lenh-require-require_once-include-include_once-trong-php-647.html
 */

/*
 * Question: Khi include 1 file có chứa 1 hàm khác trùng tên với hàm đã tồn tại -> conflict?
 */
$name = "TienNH22";

sayHello($name);

function sum($a = 0, $b = 2) {
    $tong = $a + $b;

    return $tong;
}

$x = 1; $y = 5;
// echo "Kết quả: " . sum($x, $y) . "<br>";
// echo "sum(\$x): " . sum($x) . "<br>";
// echo "sum(\$y): " . sum($y) . "<br>";
// echo "sum(): " . sum() . "<br>";
