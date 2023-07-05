<?php

// $arr = ['中国','江苏','无锡'];

// list(,,$city)= $arr;

// echo $city;

echo '<br/>';
// echo $area;


$users = [
    ['name'=>'小军','age'=>16],
    ['name'=>'小明','age'=>18],
    ['name'=>'小李','age'=>19],
    ['name'=>'小红','age'=>20],
];

while(list('name'=>$name,'age'=>$age)=current($users)){
    echo "name:{$name} is {$age}  <hr/>";

    next($users);

}


foreach($users as $key=>$user){
  echo $key.' name is'.$user['name'].'<br/>';
}