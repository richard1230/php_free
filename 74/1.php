<?php


// if(!file_exists('2.txt')){
//   echo "file exist not";
// }
// // $handle = @fopen('2.txt','r');

// // var_dump($handle);


$handle = fopen('1.txt','w+');


fwrite($handle,'中国牛叉');

fseek($handle,0);

echo fread($handle,filesize('1.txt'));

fclose($handle);
