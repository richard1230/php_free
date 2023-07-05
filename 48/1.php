<?php


$users = [
    ['name'=>'小军','age'=>16],
    ['name'=>'小明','age'=>18],
    ['name'=>'小李','age'=>19],
    ['name'=>'小红','age'=>26],
];


// $filterUsers = array_filter($users,function($user){
//     return $user['age']>20;
// });

// print_r($filterUsers);


$mapUsers = array_map(function($user){
// unset($user['age']);
// $user['class'] = '火箭班';


return  implode('-',array_values($user));

}
    ,$users
);

print_r($mapUsers);





