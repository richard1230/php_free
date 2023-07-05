<?php

$a = 1;

$b = &$a;
echo $a;
echo '<hr/>';
$a = 10;
echo $b;
echo '<hr/>';
echo $a;
?>

<!-- 将一个变量的内存地址赋值给另外一个变量的行为 -->