<?php

require_once 'ket_noi.php';

function getAll() {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang";
    $statement = $conn->prepare($sql);

    $statement->execute([]);
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $data = [];
    while(true) {
        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }

        $row = [
            'id' => $rowData['id'],
            'ma' => $rowData['ma'],
            'ten' => $rowData['ten'],
            'sdt' => $rowData['sdt'],
            'dia_chi' => $rowData['dia_chi'],
            'gioi_tinh' => $rowData['gioi_tinh'],
            'email' => $rowData['email'],
        ];

        array_push($data, $row);
    }

    return $data;
}

function insert($data) {
    $conn = getConnection();
    $sql = "INSERT INTO khach_hang(ma, ten, sdt, dia_chi, gioi_tinh, email) " .
        " VALUES (:ma, :ten, :sdt, :dia_chi, :gioi_tinh, :email)";

    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;
}
