<?php

// $status = preg_match('@baidu@','baidu.com');

// var_dump($status);

//  \d ---->匹配任意一个数字
//  \D -----> ^0-9

// $res = preg_match('/\d/','dnasefn110');

// var_dump($res);

// $res = preg_match('/\D/','111');

// var_dump($res);

// \w  与任意一个英文字母，下划线，数字匹配
// // \W  与任意一个  除了 英文字母，下划线，数字匹配
// $res = preg_match('/\W/','@');

// var_dump($res);

// \s 与任意一个空白字符串匹配 
//  \S  除了空白字符串以外的任意字符
// $res = preg_match('/\S/','S');

// var_dump($res);


// \n  换行

// $res = preg_match('/\n/',"\n");

// var_dump($res);

// \t  制表符号
$res = preg_match('/\t/',"\t");

var_dump($res);