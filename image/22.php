<?php
session_start();

//echo ($_POST['captcha']);
//print_r($_SESSION['captcha']);

//
if(strtoupper($_POST['captcha'])==$_SESSION['captcha'])
{
    echo "ok";
}else{
    echo "error";
}