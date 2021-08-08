<?php

$arr = [1, 2, 3, 4, 5, 6, 7]; // mảng trong PHP
//      0  1  2 ...

// echo $arr[0] + $arr[2];
$i = 0;

for ($i = 0; $i < 3; $i++) {
    echo $i;
    echo "<br>";
}

// while ($i < 3) {
//     echo $arr[$i];
//     $i++;
//     echo "<br>";
// }

// $listSV = [
// //  key => value,
//     'ph12345' => [
//         'ten' => 'Nguyen Van A',
//         'diem' => 10,
//     ],
//     'ph12346' => [
//         'ten' => 'Tran Thi B',
//         'diem' => 7,
//     ],
//     'ph12347' => [
//         'ten' => 'Nguyen Van C',
//         'diem' => 4,
//     ],
// ];

// var_dump($listSV['ph12345']); die;
// $diem = $listSV['ph12345']['diem'];

// if ($diem < 5) {

//     echo $listSV['ph12345']['ten'] . " - chưa qua môn";
// } else if ($diem < 7) {

//     echo $listSV['ph12345']['ten'] . " - học lực trung bình";
// } else if ($diem < 8) {

//     echo $listSV['ph12345']['ten'] . " - học lực khá";
// } else {

//     echo $listSV['ph12345']['ten'] . " - học lực ong vàng";
// }

// echo "<br>";

// if ($listSV['ph12346']['diem'] > 5) {
//     echo $listSV['ph12346']['ten'] . " - đã qua môn";
// } else {
//     echo $listSV['ph12346']['ten'] . " - chưa qua môn";
// }

// echo "<br>";

// if ($listSV['ph12347']['diem'] > 5) {
//     echo $listSV['ph12347']['ten'] . " - đã qua môn";
// } else {
//     echo $listSV['ph12347']['ten'] . " - chưa qua môn";
// }
