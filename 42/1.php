<?php

function mul($num){
    //
    if($num == 1){
    return $num;
    }
    return $num * mul($num-1);
}

echo mul(5);

// 1.第一次的时候
// 2. 停止的点

