<?php

require_once 'ket_noi.php';

function login($email, $password) {
    $conn = getConnection();

    $sql = "SELECT * FROM nhan_vien WHERE email = :email " .
        "AND password = :password";

    $params = [
        'email' => $email,
        'password' => $password,
    ];

    $statement = $conn->prepare($sql);
    $statement->execute($params);
    $row = $statement->fetch();

    // var_dump($statement->errorInfo()); die;
    if ($row === false) {
        // Truy vấn xảy ra lỗi hoặc không có dữ liệu trả ra -> fetch() sẽ trả về false
        return [];
    }

    $data = [
        'id' => $row['id'],
        'ten' => $row['ten'],
        'email' => $row['memaila'],
        'password' => $row['password'],
    ];

    return $data;
}
