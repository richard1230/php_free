<?php

$filename = '1.txt';

$handle = fopen($filename,'w+');

$res =  flock($handle,LOCK_EX | LOCK_NB,$would_block);

//var_dump($res);

if ($res){
    fwrite($handle,'www.baidu.com is 辣鸡 ???');

    fseek($handle,0);

    echo fread($handle,999);

    flock($handle,LOCK_UN);
}else{
    echo 'file is locked';
}

//echo fread($handle,999);


//fclose($handle);