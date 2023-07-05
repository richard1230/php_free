<?php

$database = include '../49/config/database.php';

// print_r($database);


 function  my_array_change_key_case(array $data ,int $type=CASE_UPPER):array{

    foreach($data as $key=>$value):
        $action = $type== CASE_UPPER?'strtoupper':'strtolower';
        unset($data[$key]);
        $data[$action($key)]= is_array($value) ? my_array_change_key_case($value,$type): $value;

    endforeach;
    return $data;

 }


 print_r(my_array_change_key_case($database,CASE_LOWER));
