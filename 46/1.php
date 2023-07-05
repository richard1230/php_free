<?php

$users =["小明","小花"];

array_push($users,"小王");

print_r($users);

echo '<hr/>';

array_pop($users);


print_r($users);

echo '<hr/>';

array_shift($users);


print_r($users);

echo '<hr/>';

array_unshift($users,'小黄');


print_r($users);

echo '<hr/>';

echo count($users);






