<?php

function copyDir($dir,$to):bool{
    is_dir($to) or mkdir($to,0755,true);

    foreach (glob($dir.'/*') as $file){
        $target = $to.'/'.basename($file);
        is_file($file)? copy($file,$target):copyDir($file,$target);
    }
    return true;
}


function delDir(string $dir):bool
{
    if (!is_dir($dir)) {
        return true;
    }

    foreach (glob($dir . '/*') as $file) {
        is_file($file) ? unlink($file) : delDir($file);
    }

    return rmdir($dir);
}


//delDir('./3');


function moveDir(string $dir, string $to):bool
{
    copyDir($dir, $to);
    return delDir($dir);
}


moveDir('./2','./1/2');

