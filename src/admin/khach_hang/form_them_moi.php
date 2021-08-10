<?php
session_start();
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
    <?php
    if ( isset($_SESSION['error']) ) {
        echo $_SESSION['error'];
        unset( $_SESSION['error'] );
    }
    ?>
    <!--
        Form Upload file
        -> method="POST"
        -> enctype="multipart/form-data"
    -->
    <form
        method="POST"
        enctype="multipart/form-data"
        action="/we16307/src/admin/khach_hang/them_moi.php"
    >
        <div>
            <label>Mã KH</label>
            <input type="text" name="ma" />
        </div>
        <div>
            <label>Tên KH</label>
            <input type="text" name="ten" />
        </div>
        <div>
            <label>Giới tính</label>
            <select name="gioi_tinh">
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div>
            <label>Avatar</label>
            <input type="file" name="avatar" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" />
        </div>
        <div>
            <label>Số điện thoại</label>
            <input type="number" name="sdt" />
        </div>
        <div>
            <label>Địa chỉ</label>
            <input type="text" name="dia_chi" />
        </div>
        <div>
            <button>Thêm mới</button>
            <a href="/we16307/src/admin/users/danh_sach.php">Quay lại</a>
        </div>
    </form>
</body>
</html>