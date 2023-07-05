<?php

header('Content-type:image/gif');

$res = imagecreatetruecolor(500, 500);

$red = imagecolorallocate($res, 255, 0, 0);

$green = imagecolorallocate($res, 0, 255, 0);
$blue = imagecolorallocate($res, 0, 0, 255);
$white = imagecolorallocate($res, 255, 255, 255);


imagefill($res,0,0,$white);

$font = realpath('source.otf');

$text = '中国牛皮';

$size = 10;

$box=imagettfbbox($size,0,$font,$text);


$width = $box[2]-$box[0];

$height = $box[1]-$box[7];

imagettftext($res,$size,0,500-$width,$height,$green,$font,$text);



imagepng($res);


