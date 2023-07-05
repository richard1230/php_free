<?php
//$handle = fopen('1.txt','a+');
//
//fwrite($handle,'我是中国人');
//
//
//fseek($handle,0);
//
//echo fread($handle,filesize('1.txt'));

$filename ='2023-'.time().'.txt' ;


$handle = fopen($filename,'x+');

fwrite($handle,'中国牛叉！！！走向世界!!!');

//fclose($handle);
//
//$file = fopen($filename,'r');

fseek($handle,0);

echo fread($handle,filesize($filename));