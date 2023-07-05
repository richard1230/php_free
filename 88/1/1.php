<?php

include './help.php';
//获取目录总大小
//function calculDir(string $dir):int{
//    $size = 0;
//
//    foreach (glob($dir.'/*') as $file){
//        $size += is_file($file)? filesize($file):calculDir($file);
//    }
//    return $size;
//}
//
//echo  total_disk(calculDir('..')) ;

function copyDir($dir,$to):bool{
    is_dir($to) or mkdir($to,0755,true);

    foreach (glob($dir.'/*') as $file){
        $target = $to.'/'.basename($file);
        is_file($file)? copy($file,$target):copyDir($file,$target);
    }
    return true;
}

copyDir('.','../88/3');






