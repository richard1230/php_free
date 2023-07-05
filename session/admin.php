<?php

session_save_path('save_session');

//session_name('ChinaJiangSu');
//
//session_id('qqqqqwwwwweeeee');

session_start();

$_SESSION['session']='我是会话,我是在后台被设置的: admin.php';



//echo session_save_path();
//print_r($_SESSION);

//unset($_SESSION['session']);

//session_destroy();







