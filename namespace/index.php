<?php

namespace App;



include 'order.php';

include 'comment.php';

class User{
    public static function say()
    {
        return "这是非限定方式";
    }
}


//echo User::say();

//echo show\Order::say();

echo \space\Comment::say();



