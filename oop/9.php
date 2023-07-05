<?php


class House{
    protected $space;

    public function __construct($space)
    {
        $this->space = $space;
    }

    public function buy(){
        return "贷款买了一套面积为:".$this->space.'的商品房子';
    }

}


$a = new House(100);

echo $a->buy();