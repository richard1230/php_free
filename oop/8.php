<?php


class Father {
    public function count(){
        return $this->show();
    }

    private function show(){
        return "中国威武";
    }
}


class Son extends Father {
    public function say(){
        return '中国正好';
    }
}


$son = new Son();

echo $son->say();


echo "<hr/>";

$baba = new Father();

echo $baba->count();