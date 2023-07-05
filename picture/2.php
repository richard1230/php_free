<?php
include 'Thumb.php';

$thumb = new Thumb();


try {
    $thumb->make('dog.jpg','1.jpg',400,200,1);
}catch (Exception $e){
    echo $e->getMessage();
}

