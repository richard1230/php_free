<?php


class User {
    protected $name;

    protected static $Capital = '北京';
    public function say(){
        return self::$Capital ."说: 中国真牛叉!!!中国威武！！！";
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
         return $this->name;
    }

    static public function getClassName(){
        return self::$Capital;
    }
}

$obj = new User();

$obj->setName('江苏');

//echo  $obj->say();

echo '<hr/>';

echo $obj->getClassName();
echo '<hr/>';

$Lee = new User();

$Lee->setName('苏州和无锡');

//echo $Lee->say();


echo $Lee->getClassName();



