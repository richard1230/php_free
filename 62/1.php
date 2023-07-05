<?php

// [] 就是原子表
// $res = preg_match('/[abc]/','asdfg');

// echo $res;

//[^]
// $res = preg_match('/[^abc]/','abcd');

// echo $res;

//[0-9]
// $res = preg_match('/[0-9]/','qwerasdf1');

// echo $res;

// [a-z]
//[A-Z]
// $res = preg_match('/[a-zA-Z]/','@#$%aSW');

// echo $res;


// . 点在正则中表示除了换行符外的任意字符
// $res = preg_match('/[.]/',"baidu.com");

// echo $res;


$str = "1.jpg@2.png#3.jpeg";

$files = preg_split('/[@#]/',$str);


print_r($files);

echo implode(',',$files);





