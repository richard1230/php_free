<?php

// $str = <<<php
// #1 2023-02-12

// 中国
// @#100

// 雅虎网

// #2 2023-09-11
// 苏州
// php;

// $
// $preg = '/^#\d+/m';

// echo preg_replace($preg,'',$str);


$str = 'abc';

$preg = '/^a\w+   #这是注释,可以被x所忽略 /x';

echo preg_replace($preg,'',$str);









