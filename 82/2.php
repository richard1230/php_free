<?php
// 2.cache.php



$name = '中国江苏苏州吴中区';
//include './2.blade.php';

if(is_file('cache.php')
     && filemtime('cache.php') > (time() - 15)//
){
    include 'cache.php';
    echo '这是缓存文件';
}else{
    ob_start();//开启缓存区
    include '2.blade.php';
   $contents =  ob_get_contents();
    file_put_contents('cache.php',$contents);
}



