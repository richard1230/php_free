<?php

class ValidateException extends Exception{

}

try {
    throw new ValidateException('发生了错误');
}catch (ValidateException $e){
//    echo  "ValidateException: ".$e->getMessage();
       echo  $e->getFile(). "<hr/>";
       echo  $e->getLine()."<hr/>";
       echo  $e->getCode(). "<hr/>";
       echo  $e->getMessage()."<hr/>";

}catch (Exception $e){
//    echo "Exception: ".$e->getMessage();
}