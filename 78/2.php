<?php

$filename = '1.txt';

$handle = fopen($filename,'w+');

flock($handle,LOCK_EX);

//echo fread($handle,99999);

fwrite($handle,'中国牛皮,中国威武!!!');

fseek($handle,0);

echo fread($handle,99999);

fclose($handle);
