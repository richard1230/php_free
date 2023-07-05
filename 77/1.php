<?php

$handle = fopen('user.txt','rb');

//while (!feof($handle)){
////    echo fread($handle,1);
//    echo fgetc($handle);
//
//}
//
//while ($word = fgets($handle))
//    echo $word;


$user = fgetcsv($handle,0,',');

print_r($user);
