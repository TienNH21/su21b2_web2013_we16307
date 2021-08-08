<?php

$luong = 40;
$thuong = 10;
$tongTN = $luong + $thuong;

if ($tongTN < 11) {
    echo "Không phải đóng thuế <br>";
} else if ($tongTN < 15) {
    echo "Đóng thuế 10% <br>";
} else if ($tongTN < 30) {
    echo "Đóng thuế 15% <br>";
} else {
    echo "Đóng thuế 20% <br>";
}
