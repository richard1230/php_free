<?php

class UploaderException extends Exception{

}

class LoginException extends Exception{

}

try {
//    throw new LoginException('你还没有登录');
    throw new UploaderException('上传的文件有问题');

}catch (LoginException $exception){
    echo "发生了登录异常";
    echo "<hr/>";
   echo $exception->getMessage();
}catch (UploaderException $exception){
    echo $exception->getMessage();
} finally {
    echo "<hr/>";
    echo "这里永远都执行";
}