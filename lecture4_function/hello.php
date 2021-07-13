<?php

function sayHello (/* Danh sách tham số */) {
    echo "Hello Poly";
}

// sayHello();

function sum($a, $b) {
    $tong = $a + $b;

    return $tong;
}

$x = 1; $y = 5;
echo "Kết quả: " . sum($x, $y);
