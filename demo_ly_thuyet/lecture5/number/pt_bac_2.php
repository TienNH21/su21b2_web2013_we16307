<?php

/*
 * isset(): kiểm tra biến có tồn tại & khác NULL hay không
 * empty(): kiểm tra biến có rỗng hay không: 0, '', false, [], NULL
 */

function checkNotEmpty($key) {
    // Kiểm tra $key có tồn tại trong $_GET hay không
    if ( isset($_GET[ $key ]) === false ) {
        return false;
    }

    if ( empty( $_GET[ $key ] ) == true ) {
        if ($_GET[$key] == 0) {
            return true; // Cho phép giá trị 0
        }

        return false;
    }

    return true;
}

function tinh($a, $b, $c) {
    $kq = 0;
    if ($a === 0) {
        if ( $b === 0 && $c === 0 ) {
            echo "Phương trình vô số nghiệm";
            return ;
        }

        if ( $b === 0 && $c !== 0) {
            echo "Phương trình vô nghiệm";
            return ;
        }

        $kq = -$c / $b;
        echo "Phương trình có 1 nghiệm: $kq";

    } else {
        $delta = pow($b, 2) - ( 4 * $a * $c );

        if ($delta < 0) {
            echo "Phương trình vô nghiệm";
        } else if ($delta === 0) {
            $kq = -$b / ( 2 * $a );
            echo "Phương trình có nghiệm kép: $kq";
        } else {
            $x1 = ( -$b + sqrt($delta) ) / (2 * $a);
            $x2 = ( -$b - sqrt($delta) ) / (2 * $a);

            echo "Nghiệm \$x1 = $x1";
            echo "Nghiệm \$x2 = $x2";
        }
    }
}

/*
 * Kiểm tra key 'so_thu_nhat' có tồn tại trong mảng $_GET && gía trị không rỗng
 * và đồng thời key 'so_thu_hai' có tồn tại trong mảng $_GET && gía trị không rỗng
 * và đồng thời key 'so_thu_ba' có tồn tại trong mảng $_GET && gía trị không rỗng
 * ===> cả 3 giá trị cùng tồn tại
 */
if (
    checkNotEmpty('so_thu_nhat') === true &&
    checkNotEmpty('so_thu_hai') === true &&
    checkNotEmpty('so_thu_ba') === true
) {
    $a = intval( $_GET['so_thu_nhat'] );
    $b = intval( $_GET['so_thu_hai'] );
    $c = intval( $_GET['so_thu_ba'] );

    tinh($a, $b, $c);
} else {
    echo "Không được để trống";
}

echo "<br>";
echo "<a href='/we16307/lecture5/number/pt_bac_2.html'>Quay lại</a>";
