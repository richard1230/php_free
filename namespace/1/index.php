<?php

namespace App;

include "help.php";

function show(){
    echo "the show  is in index.php";
}
class User{
    public static function make(){
        return "this is make in file 1";
    }
}


//echo User::make();

//echo show();

echo \space\AGE;