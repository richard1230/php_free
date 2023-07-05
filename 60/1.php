<?php

// echo ceil(10.8);


// echo '<br/>';

// // echo ceil(10.2);

// echo '<br/>';

// // echo  floor(10.2);

// echo '<br/>';

// echo  min(12,2);

echo '<br/>';

// echo round(12.534);


function gen_code(int $len = 5){
    $str = '123456789abcdefghijklmnopqrstuvwxyz';

    $code='';

    for($i = 0;$i<$len;$i++){
        $index = mt_rand(0,strlen($str)-1);
        $code.=strtoupper($str[$index]);
    }

    return $code;
}


echo gen_code(5);







