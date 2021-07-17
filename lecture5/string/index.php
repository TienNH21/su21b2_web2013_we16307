<?php

$name = "TienNH21";

$hello = "Hello, tên tôi là \"\$name\" ";
// echo $hello;

$str = "Hello <b>$name</b>";

echo $str;
echo "<hr>";
echo htmlentities($str);

// $heredoc = <<<HERE
//     Xin chào $name
// HERE;

// $nowdoc = <<<'NOW'
//     Hello $name
// NOW;

// echo $heredoc;
// echo "<br>";
// echo $nowdoc;
