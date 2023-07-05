<?php

// if (false) :
//     echo '胡歌';
//  else :
//     echo '彭于晏';
//  endif;

$age = 10;

if ($age < 15):
    echo '儿童';
elseif ($age <= 30):
    echo '青年';
elseif ($age <= 50):
    echo '中年';
else:
    echo '可爱的老年人';
endif;
