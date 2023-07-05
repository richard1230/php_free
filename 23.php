<?php

// echo md5('中国威武!!');

// echo '<hr/>';

// $file = 'user1/info';
// echo md5($file) . '.php';

// echo '<hr/>';

// $view = 'template/admin/master.php';
// echo md5($view) . '.php';

// // echo '<hr/>';

// explode:使用一个字符串来分割另外一个字符串
// $pizza = 'number1 number2 number3 number4 number5 number6  number7';
// $num = explode(' ', $pizza);
// echo '<hr/>';
// echo var_dump($num);
// echo '<hr/>';
// echo $num[0];
// echo '<hr/>';
// echo $num[5];

// implode:将一个以为数组的值转换为字符串
// echo '<hr/>';
// $array = ['China', 'JiangSu', 'Suzhou'];
// $name = implode(',', $array);
// echo '<hr/>';
// echo $name;

echo '<hr/>';
$rest = substr('abcdef', 1);

echo $rest;
echo '<hr/>';
$rest = substr('abcdef', 1, -2);
echo $rest;
echo '<hr/>';

$ad = '好好学习,天天向上,我爱祖国';
$rest = mb_substr($ad, 0, 3, 'utf-8');
echo $rest;
