<?php

// for ($num=19;$num>0;$num--) {
//     if(!($num%2)) continue;
//     echo $num.'<hr/>';
// }


$digitial = 18;

while($digitial<50):
    $digitial++;
    switch ($digitial){
        case $digitial%2==0:
            echo $digitial."<hr/>";
            break;
        case $digitial%19==0:
            echo $digitial."<hr/>";
            break 2;
    }
endwhile;

