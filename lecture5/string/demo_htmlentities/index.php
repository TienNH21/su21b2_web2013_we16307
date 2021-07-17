<?php

$hoTen = htmlentities( $_POST['ho_ten'] );
if ( empty($hoTen) == true ) {
    echo "Không được để trống";
} else {
    echo htmlentities($hoTen);
    echo "<br>";
    echo "Chuỗi nhập vào có độ dài: " . strlen($hoTen);
    echo "<br>";
    echo "Họ: " . substr($hoTen, 0, 8);
    echo "<br>";
    echo "Đệm: " . substr($hoTen, 9, 5);
}

/*
 * Các giá trị được coi là rỗng với hàm empty: 0, '', NULL, false, []
 */
// $test = [1];
// echo empty($test);
