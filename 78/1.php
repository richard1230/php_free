<?php

$filename = '1.txt';

$handle = fopen($filename,'r');

flock($handle,LOCK_EX);

sleep(5);

echo fread($handle,99999);

fclose($handle);

//加锁之后何时解锁? 1.整个脚本执行完毕;2.人为解锁LOCK_UN
//1.读锁(共享锁):1.php对1.txt施加读锁,在锁住期间,2.php只能对1.txt读取不能写
//2.写锁:1.php对1.txt施加写锁,在锁住期间,2.php对1.txt读写皆不能写

