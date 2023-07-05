<?php

$rw = 400;

$rh = 200;
$res = imagecreatetruecolor($rw,$rh);

$image=imagecreatefromjpeg('dog.jpg');

$iw = imagesx($image);

$ih = imagesy($image);

if ($iw/$rw > $ih/$rh){
    $iw = $ih * $rw/$rh;
}else{
    $ih= $iw * $rh/$rw;
}


imagecopyresampled($res,$image,0,0,0,0,$rw,$rh,$iw,$ih);

header('Content-type:image/jpeg');

imagejpeg($res);

