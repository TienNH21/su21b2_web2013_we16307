<?php
$name = 'FPT Polytechnic';
$arr = [1, 2, 3, 4, 5, 6, 7]; // mảng trong PHP
//      0  1  2 ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Hello <?php echo $name; ?> </h1>

    <ul>
        <?php for ($i = 0; $i < 7; $i++) { ?>
            <li> <?php echo $arr[$i]; ?> </li>
        <?php } ?>
    </ul>
</body>
</html>
