<?php

$database = include '../49/config/database.php';


// print_r($database);




function  my_array_change_value_case(array $data ,int $type=CASE_UPPER):array{

   $action = $type ==CASE_LOWER? 'strtolower':'strtoupper';

   foreach($data as $key => $value){
        $data[$key] = is_array($value)?my_array_change_value_case($value,$type):$action($value);
   }
   return $data;

 }


 print_r(my_array_change_value_case($database,CASE_UPPER));

