<?php

header('Content-type:image/png');
$handle = fopen('1.png','r');

//echo fread($handle,filesize('1.png'));//注意:创建2.png的时候不要写这一行


$pngfile = fopen('2.png','w');


fwrite($pngfile,fread($handle,filesize('1.png')));
