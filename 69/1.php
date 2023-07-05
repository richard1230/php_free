<?php

// $str = '<h1>百度</h1> <h1>华为</h1>';

// $preg ='/<h1>.*<\/h1>/U';


// preg_match_all($preg,$str,$matches);

// print_r($matches);





// $str = '!@#$$#%%236111223@qq.com';

// $preg = "/\w+@[\w\.]+/A";

// preg_match_all($preg,$str,$matches);

// print_r($matches);



$str = "3a\n";

$preg = '/\d+a$/D';

preg_match_all($preg,$str,$matches);

print_r($matches);
