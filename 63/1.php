<?php

//  原子组:如果一次要匹配多个元子,可以通过元子组完成  -------> ()
// 原子表: [] 

// $res = preg_match('/[12]/',102);
// $res = preg_match('/(12)/',112);

// echo $res;


// $str = '官网 qq.com, 技术支持 tengxun.com  百度 baidu.com';

// $preg = "/(\.)(com)/";


// echo preg_replace($preg,'\1<span style="color:red">\2</span>\0',$str);



$str = preg_match('/12$/',1257912);


echo $str;