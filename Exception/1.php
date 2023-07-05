<?php

include "Code.php";

try {
    $code = new Code();
    $code->make(50);
}catch (Exception $e){
    echo $e->getMessage();
}


//if($code->make(50)===false){
////    echo "验证码出错了";
//    echo $code->getError();
//}