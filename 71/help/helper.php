<?php


function total_disk(int $total):?string{
    $config =[3 => 'GB',2=>'MB',1=>'KB'];

    foreach($config as $num => $unit){
            if($total > pow(1024,$num)){
               return round($total/ pow(1024,$num)).$unit;
            }
    };

    return round($total/ pow(1024,$num)).'B';

}

