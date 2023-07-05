<?php

// $arr = array(
//     1,2,3,5
// );

// print_r($arr);

$arr = [1,2,3];//索引数组

echo $arr[1];

echo '<br/>';
$user = [
    'name'=>'中国',
    'age'=>'5000'
];//关联数组


echo $user['age'];

echo '<br/>';


$lesson = [
    ['title'=>'vscode','create_at'=>'2030'],
    ['title'=>'php','create_at'=>'2023']
];
echo $lesson[1]['title'];