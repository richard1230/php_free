<?php

// function make(&$num){
//   return ++$num;
// }

// $num = 23;

// echo make($num);

// echo "<hr/>";

// echo $num;

// function sum(...$num){
//     return array_sum($num);
//   }

//   echo sum(1,10);

function mobile($tel, $num = 4, $fixed = '*')
{
    return substr($tel, 0, -1 * $num) . str_repeat($fixed, $num);
}
echo mobile('11234567890', 3, '%');
echo '<hr/>';
echo mobile('11234567890');
