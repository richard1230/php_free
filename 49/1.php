<?php

// $arr = [
//     'host' => 'localhost',
//     'port'=> 3306,
//     'user'=>'root'
// ];

$database = include 'config/database.php';
// print_r($database);

// print_r(array_merge($database,['host'=>'127.0.0.1','password'=>'123456']));

print_r(array_change_key_case($database,CASE_LOWER));







