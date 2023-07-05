<?php


// function sum(){
//     return "function sum,this is sum function";
// }

// $callback = 'sum';

// echo $callback();


$file = 'ChinaCms.exe';

// $ext= trim(,'.')

$ext0 = strrchr($file,'.');//

$ext = trim($ext0,'.');

$action = strtolower($ext);

function jpg(){
    return 'jpj function';
}

function png(){
    return 'png function';
}


if (function_exists($action)){
  echo $action($file);
}
else{
    echo '不存在';
}
