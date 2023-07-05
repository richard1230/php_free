<?php
// $name = '中国牛叉,中国威武!江苏是一个大省';//全局变量
// function show(&$name){
  
//     // $name = "江苏牛叉";//局部变量
//     // global $name;
//     // echo $GLOBALS['name'];
//     echo $name;
// }


// echo show($name);

function sum (int ...$nums):int{
      static $count = 0;
      return $count += array_sum($nums);
}

echo sum(1,2,3);

echo '<br/>';

echo sum(1,2,3);
