<?php

session_start();

/*
 * .        Xét thư mục hiện tại
 * ..       Lùi lại 1 thư mục
 */
require_once './../../db/khach_hang.php';

if ( isset($_SESSION['user']) == false ) {
    header("Location: /we16307/src/auth/login_form.php");
}

$data = getAll();

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
            <a href="/we16307/src/admin/khach_hang/them_moi.html">Thêm mới</a>
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
                        <td colspan="2">Thao tác</td>
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
                            <td>
                                <a href="/we16307/src/admin/khach_hang/form_update.php?id=<?php echo $value['id']; ?>">Cập nhật</a>
                            </td>
                            <td>
                                <a href="/we16307/src/admin/khach_hang/delete.php?id=<?php echo $value['id']; ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
