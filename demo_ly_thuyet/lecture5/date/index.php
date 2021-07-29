<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

/*
 * Định dạng ngày tháng
 * 20/07/2021 -> d/m/Y
 * 20-07-2021 -> d-m-Y
 * 2021-07-20 -> Y-m-d
 *
 * Y: định dạng năm - 4 số
 * y: định dạng năm - 2 số
 * m: định dạng tháng - số
 * M: định dạng tháng - tên
 * d: định dạng ngày - số
 * D: định dạng thứ trong tuần
 * c
 */
$dateFormat = 'D, d-m-Y';

/*
 * Định dạng thời gian
 * Giờ: H
 * Phút: i
 * Giây: s
 * H:i:s
 */
$timeFormat = 'H:i:s';

$format = "$dateFormat $timeFormat";
$now = date($format);
echo $now;

echo "<hr>";

echo date( $format, strtotime('2021-07-25 10:00:00') );
echo "<br>";
echo date( $format, strtotime('04 August 2021 9:00:00') );
echo "<br>";
echo date( $format, strtotime('04 August 2021 9:00:00 +1 day') );
echo "<br>";
echo date( $format, strtotime('04 August 2021 9:00:00 last Monday') );
echo "<br>";
echo date( $format, strtotime('04 August 2021 9:00:00 next Monday') );
echo "<br>";

$startDate = '28-06-2021';
$endDate = $startDate . ' +7 week last Saturday';

echo date( $format, strtotime($endDate) );

echo date('m-d-Y', strtotime('first day of this month'));
echo date('m-d-Y', strtotime('last day of this month'));
