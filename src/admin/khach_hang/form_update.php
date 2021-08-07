<?php

require_once './../../db/khach_hang.php';

$data = findById($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"
        action="/we16307/src/admin/khach_hang/update.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
        <div>
            <label>Mã KH</label>
            <input type="text" name="ma" value="<?php echo $data['ma']; ?>" />
        </div>
        <div>
            <label>Tên KH</label>
            <input type="text" name="ten" value="<?php echo $data['ten']; ?>"  />
        </div>
        <div>
            <label>Giới tính</label>
            <select name="gioi_tinh">
                <option
                    <?php
                        echo $data['gioi_tinh'] == 1 ? "selected" : "";
                    ?>
                    value="1"
                >
                    Nam
                </option>
                <option
                    <?php echo $data['gioi_tinh'] == 1 ? "selected" : "" ?>
                    value="2"
                >
                    Nữ
                </option>
            </select>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $data['email']; ?>"  />
        </div>
        <div>
            <label>Số điện thoại</label>
            <input type="number" name="sdt" value="<?php echo $data['sdt']; ?>" />
        </div>
        <div>
            <label>Địa chỉ</label>
            <input type="text" name="dia_chi" value="<?php echo $data['dia_chi']; ?>"  />
        </div>
        <div>
            <button>Cập nhật</button>
            <a href="/we16307/src/admin/users/danh_sach.php">Quay lại</a>
        </div>
    </form>
</body>
</html>
