<?php

$arr = [5, 3];

function swap(&$a, &$b) {
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
}

swap($arr[0], $arr[1]);

echo $arr[0] . "<br>";
echo $arr[1];
