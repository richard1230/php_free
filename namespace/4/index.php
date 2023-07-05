<?php


namespace App;

include 'boot.php';

use Module\Shop\Controller\User;
use Module\Shop\Server\Pay;

use Module\Shop\Server\User as UserService;


//include "Module/Shop/Controller/User.php";
//include "Module/Shop/Server/Pay.php";
//include "Module/Shop/Server/User.php";




Pay::show();

echo "<hr/>";

UserService::show();


echo "<hr/>";
User::show();


