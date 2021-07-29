<?php

$dbUser = "root";
$dbPass = "";
$dbName = "we16307";
$dbHost = "localhost";

// B1: Tạo kết nối tới CSDL
/*
 * $connection ( kết quả trả về của hàm mysqli() ) là đối tượng đại diện cho kết nối tới DB
 */
$connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// B2: Viết truy vấn
$sql = "SELECT * FROM khach_hang";

// B3: Thực hiện câu truy vấn SELECT
$queryResult = $connection->query($sql);

$result = [];

// Đọc dữ liệu được DB trả về, nằm trong $queryResult
while ($row = $queryResult->fetch_row()) {
    $data = [
        'id' => $row[0],
        'ma' => $row[1],
        'ten' => $row[2],
        'sdt' => $row[3],
        'dia_chi' => $row[4],
        'gioi_tinh' => $row[5],
        'email' => $row[6],
    ];

    array_push($result, $data);
}

var_dump($result);
