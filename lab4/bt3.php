<?php

/*
 * Nguyễn Việt Dũng
 */

$arr = [
    "abcd",
    "abc",
    "de",
    "hjjj",
    "g",
    "wer",
];

function timMax(array $arr): int {
    $viTri = -1;
    $max = strlen( $arr[0] );

    foreach ($arr as $key => $value) {
        echo "$key => $value <br>";
        if (strlen($value) > $max) {
            $max = strlen($value);
            $viTri = $key;
        }
    }

    return $viTri;
}

function timMin(array $arr): int {
    $viTri = -1;
    $min = strlen( $arr[0] );

    foreach ($arr as $key => $value) {
        if (strlen($value) < $min) {
            $min = strlen($value);
            $viTri = $key;
        }
    }

    return $viTri;
}
