<?php

echo '<br/>';

// $type = ['jpeg','jpg','png'];

// $file = 'china.png';

// $ext = strtolower(substr(strrchr($file,'.'),1));


// if(!in_array($ext,$type)){
//    echo 'is wrong';
// }else{
//     echo 'success';
// }




// echo '<br/>';


// $allowImageType = ['jpeg' => 2000000,
// 'jpg'=>200000,'png'=>200000
// ];

// $file = 'china.txt';


// $ext = strtolower(substr(strrchr($file,'.'),1));


// if(!array_key_exists($ext,$allowImageType)){
//     echo 'this is wrong';
//  }else{
//      echo 'success!!! u are smart!!!';
//  }

 echo '<br/>';


$allowImageType = ['jpeg' => 2000000,
'jpg'=>200000,'png'=>200000
];

$file = 'china.jpg';


$ext = strtolower(substr(strrchr($file,'.'),1));


if(!in_array($ext,array_keys($allowImageType))){
    echo 'this is wrong!!!please agein';
 }else{
     echo 'success!!! u are smart!!!';
 }
 
 





