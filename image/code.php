<?php
include 'Captcha.php';
//  测试方法: curl http://localhost:88/image/controller.php -o 1.png
//firefox没问题,chrome有问题
session_start();

$cap = new Captcha(200,150);

$code = $cap->render();

//file_put_contents('a.php',$code);

$_SESSION['captcha']=$code;

