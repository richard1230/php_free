<?php


// * 重复0次或者更多次

echo preg_match('/^.*/','1111');

echo "<br/>";

// +: 重复1次或者更多次
// ?:重复0次或者1次
echo preg_match('/^9?/','99');

echo "<br/>";
//{n}:重复n次
//{n,}:重复n次或者更多次
echo preg_match('/^9{2,5}$/','99999');


echo "<br/>";


$str = '<h1>cctv.com</h1>';

$replace = "<h1><a href='https://baidu.com'>\\1</a></h1>";

echo preg_replace('@<h1>(.+)</h1>@',$replace,$str);


