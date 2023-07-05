<?php

function plus()
{
    static $num = 1;
    $num = $num + 1;
    return $num;
}

echo plus();
echo '<hr/>';
echo plus();
echo '<hr/>';
echo plus();
