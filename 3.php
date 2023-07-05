<?php

$a = 'hello';

$$a = 'world'; //可变变量 就相当于 $hello = "world"'

echo "$a  ${$a}";

echo "$a  $hello";

echo '<hr/>';

//变量作用域: 代码中可以访问的位置;
// var_dump($_GET);

$name = 'worldworld,hello';
function show()
{
    // print_r($_GET);
    // global $name;
    echo $GLOBALS['name'];
}

show();
