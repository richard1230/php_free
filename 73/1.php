<?php

$handle = fopen('1.txt','r+');

fseek($handle,filesize('1.txt'));
$res =  fwrite($handle,'中国威武');

// fseek($handle,0);

// echo fread($handle,99);


fclose($handle);

$handle = fopen('1.txt','r');

echo fread($handle,99);

//   var_dump($res);