<?php

include 'bootstrap.php';

//throw new Exception("这是一个异常测试,我是在index.php里面");

throw new \ExceptionApp\Exceptions\ValidateException('这是异常测试');