<?php

// Kết nối CSDL với PDO

$dbUser = "root";
$dbPass = "";
$dbName = "we16307";
$dbHost = "localhost";

/*
 * B1: Tạo kết nối tới CSDL
 * $connection ( kết quả trả về của hàm mysqli() ) là đối tượng đại diện cho kết nối tới DB
 */
$conn = new PDO("mysql: host=localhost; dbname=we16307", $dbUser, $dbPass);

// B2: Viết truy vấn
$sql = "SELECT * FROM khach_hang";

// B3: tạo Statement để thực thi câu truy vấn
$statement = $conn->prepare($sql);

/*
 * B4: gọi hàm execute() để thực thi câu truy vấn
 * execute()
 * @params: array -> Các tham số của câu truy vấn
 */
$statement->execute([]);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$data = [];

// B5: bóc dữ liệu
while(true) {
    // Lấy ra dòng dữ liệu tiếp theo
    $rowData = $statement->fetch();

    if ($rowData == false) {
        // Đã đọc hết dữ liệu -> dừng vòng lặp
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <div>
            <a href="/we16307/src/admin/users/them_moi.html">Thêm mới</a>
        </div>

        <div>
            <table>
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Mã</td>
                        <td>Tên</td>
                        <td>Giới tính</td>
                        <td>Email</td>
                        <td>SĐT</td>
                        <td>Địa chỉ</td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data as $key => $value) { ?>
                        <tr>
                            <td>
                                <?php echo $value['id']; ?>
                            </td>
                            <td>
                                <?php echo $value['ma']; ?>
                            </td>
                            <td>
                                <?php echo $value['ten']; ?>
                            </td>
                            <td>
                                <?php
                                    echo $value['gioi_tinh'] == 1 ? "Nam" : "Nữ";
                                ?>
                            </td>
                            <td>
                                <?php echo $value['email']; ?>
                            </td>
                            <td>
                                <?php echo $value['sdt']; ?>
                            </td>
                            <td>
                                <?php echo $value['dia_chi']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
