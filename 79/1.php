<?php

$filename = '1.txt';

$handle = fopen($filename,'r');

flock($handle,LOCK_SH);


echo fread($handle,999);

sleep(5);

flock($handle,LOCK_UN);

fclose($handle);




