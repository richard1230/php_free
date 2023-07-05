<?php

$db = [
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'admin'
];


//print_r($db);


$config =  var_export($db,true);

file_put_contents('database.php','<?php return '.$config.';');


$config_db = include './database.php';

echo $config_db['password'];









