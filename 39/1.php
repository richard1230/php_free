<?php

function sum():?string{
//    return null;
}

// echo sum();

try{
    echo sum();
}catch(\Throwable $th){
    echo '888';

  echo $th->getMessage();
}