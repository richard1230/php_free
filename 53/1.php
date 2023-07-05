<?php

// $config = include '../49/config/database.php';



// var_export


// print_r($database);


// echo '<hr/>';

// $config ='<?php  return '.var_export($database,true).';';


// // echo $config;


// file_put_contents('database.php',$config);




// $database = include 'database.php';


// $cache = serialize($database);


// print_r(unserialize($cache));


$config = include 'database.php';


function cache(string $filename , array $data=null){
  $file = 'cache'.DIRECTORY_SEPARATOR.md5($filename).'.php';

  // echo $file;

  if(is_null($data)){
    //取数据
     $content = is_file($file)?file_get_contents($file):null;
     return unserialize($content)?:null;
  }else{
    //存数据
    return file_put_contents($file,serialize($data));
  }

}

print_r(cache('database',$config));

// print_r(cache('database'));





















