<?php

class Model{
    const CLASS_CONST = "我是类常量,我在方法里面被调用";
    public function test(){
        return self::CLASS_CONST;
    }
}

//echo Model::CLASS_CONST;
echo (new Model())->test();