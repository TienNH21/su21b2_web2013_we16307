<?php

$arr = [5, 3, 7, 9, 1, 2, 13, 29, 17, 88, 54, 31, 92];

function tinhTB(array $arr): float {
    $tong = 0;
    foreach ($arr as $key => $value) {
        $tong = $tong + $value;
    }

    $tb = $tong / count( $arr );

    return $tb;
}

function tim5Min(array $arr): array {
    $kq = [];

    while (true) {
        if (count($kq) == 5) {
            break;
        }

        $min = $arr[0];
        $key = -1;
        foreach ($arr as $key => $value) {
            if ($value < $min) {
                $min = $value;
                $viTri = $key;
            }
        }

        $kq[] = $viTri;
        unset($arr[$viTri]);
    }

    return $kq;
}

