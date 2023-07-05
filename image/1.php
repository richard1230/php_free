<?php


//var_dump(extension_loaded('GD'));


//header('Content-type:image/gif');
//readfile('dog.jpg');


$res = imagecreatetruecolor(500, 500);

$red = imagecolorallocate($res, 255, 0, 0);

$green = imagecolorallocate($res, 0, 255, 0);
$blue = imagecolorallocate($res, 0, 0, 255);
$white = imagecolorallocate($res, 255, 255, 255);


imagefill($res,0,0,$white);

//imagerectangle($res,100,100,400,400,$green);

//imagefilledrectangle($res,200,200,300,300,$blue);
//
//imageellipse($res,250,250,450,450,$green);
//
//imagefilledellipse($res,250,250,100,100,$green)  ;

//imagesetthickness($res,10);
//
//imageline($res,0,0,490,490,$blue);
//imagesetthickness($res,20);
//
//imagesetstyle($res,[$red,$blue,$green]);
//
//imageline($res,490,0,0,490,IMG_COLOR_STYLED);
//imagesetpixel($res,250,250,$red);

//for($i=0;$i<5000;$i++){
//    imagesetpixel($res,mt_rand(0,500),mt_rand(0,500),$red);
//}
//for($i=0;$i<5000;$i++){
//    imageline($res,
//        mt_rand(0,500),
//        mt_rand(0,500),
//        mt_rand(0,500),
//        mt_rand(0,500),
//        $blue);
//}

$font = realpath('source.otf');
$text = 'cctv.com.cn';

//imagettftext($res,20,0,0,50,$red,$font,mb_substr($text,7,2,'utf-8'));

//
//for ($i = 0;$i < mb_strlen($text,'utf-8'); $i++){
//    imagettftext(
//        $res,
//        20,
//        mt_rand(-30,30),
//        30 * $i + 50,
//        50,
//        $green,
//        $font,
//        mb_substr($text,$i,1,'utf-8')
//    );
//}

$size = 20;

$box = imagettfbbox($size,0,$font,$text);

//print_r($box);

$width = $box[2] - $box[0];

$height = $box[1] - $box[7];



imagepng($res);

//imagedestroy($res);

