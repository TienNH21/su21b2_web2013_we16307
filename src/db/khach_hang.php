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
            'avatar' => $rowData['avatar'],
        ];

        array_push($data, $row);
    }

    return $data;
}

function insert($data) {
    $conn = getConnection();
    $sql = "INSERT INTO khach_hang(ma, ten, sdt, dia_chi, gioi_tinh, email, avatar) " .
        " VALUES (:ma, :ten, :sdt, :dia_chi, :gioi_tinh, :email, :avatar)";

    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;
}

function findById($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang WHERE id = :id";
    $statement = $conn->prepare($sql);
    $params = [
        'id' => $id,
    ];

    $statement->execute($params);
    $rowData = $statement->fetch();
    $data = [];
    if ($rowData != false) {
        $data = [
            'id' => $rowData['id'],
            'ma' => $rowData['ma'],
            'ten' => $rowData['ten'],
            'sdt' => $rowData['sdt'],
            'dia_chi' => $rowData['dia_chi'],
            'gioi_tinh' => $rowData['gioi_tinh'],
            'email' => $rowData['email'],
        ];
    }

    return $data;
}

function update($data) {
    $conn = getConnection();

    $sql = "UPDATE khach_hang SET ma = :ma, ten = :ten, sdt = :sdt, " .
        "dia_chi = :dia_chi, gioi_tinh = :gioi_tinh, email = :email " .
        "WHERE id = :id";

    $statement = $conn->prepare($sql);

    $statement->execute($data);
}

function deleteById($id) {
    $conn = getConnection();
    $sql = "DELETE FROM khach_hang WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->execute([ 'id' => $id ]);
}
