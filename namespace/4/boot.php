<?php

//spl_autoload_register(
//    function (string $class){
//        $file = str_replace('\\','/',$class).'.php';
//        require $file;
//    }
//);


//namespace App;

class Boot {

    public static function boot(){
        spl_autoload_register([new self(),'autoload']);
    }

    public function autoload(string $class){
        $file = str_replace('\\','/',$class).'.php';
        require $file;
    }
}


Boot::boot();
