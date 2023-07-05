<?php


$str = 'http://www.baidu.com  百度   http://www.sina.com   新浪';


// | 这个符号代表选择修饰符,就是说 | 左右两侧有一个匹配到就可以


$preg = "/(baidu|sina)(\.com)/";

$replace ='<a href="http://www.\1\2">\0</a>';


echo preg_replace($preg,$replace,$str);


