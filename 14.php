<?php
$name = 'China word';

// var_dump(isset($name));

function run()
{
    global $name;
    unset($name);
}

run();
echo $name;
