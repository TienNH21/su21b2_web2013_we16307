<?php

$arr = [1, 4, 9];

$arr[] = 10;

function printArray(array $arr) {
    foreach ($arr as $key => $value) {
        echo "\$arr[$key] = $value <br>";
    }
}

$arr2 = [1, 4, 6, 7, 8];
$arr3 = [
    'lop' => 'WE16307',
    'ca' => '1',
];

printArray($arr2);
echo "<hr>";
printArray($arr3);

echo "<hr>";
array_push( $arr2, 101 );
$arr3['ngay_hoc'] = 'lẻ';

printArray($arr3);
