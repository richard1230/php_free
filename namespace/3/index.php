<?php


namespace App;

include 'boot.php';

use App\Module\Shop\Controller\User;
use App\Module\Shop\Server\Pay;
use App\Module\Shop\Server\User as UserService;


//include "Module/Shop/Controller/User.php";
//include "Module/Shop/Server/Pay.php";
//include "Module/Shop/Server/User.php";




Pay::show();

echo "<hr/>";

UserService::show();


echo "<hr/>";
User::show();


