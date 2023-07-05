<?php

$res = imagecreatefromjpeg('dog.jpg');

$icon = imagecreatefromjpeg('c.jpeg');

imagecopy($res,$icon,0,0,0,0,imagesx($icon),imagesy($icon));

header('Content-type:image/jpeg');

imagejpeg($res);





