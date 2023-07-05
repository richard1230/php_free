<?php

include "Water.php";

try{
    $waterimage = new Water('c.jpeg');
    $waterimage->make('dog.jpg','002.jpg',2);
}catch (Exception $e){
    echo $e->getMessage();
}



