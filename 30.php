<?php

$status = 'success';

switch ($status) :
    case 'success':
        echo '成功';
        break;
    case 'error':
        echo '错误';
        break;
    default:
        echo '其他';
        break;
endswitch;
