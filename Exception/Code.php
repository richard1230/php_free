<?php


class Code{

    protected $error;

    public function make(int $len){
        $this->line($len);
//        if($this->line($len)===false){
//            return false;
//        }
    }
    protected function line(int $len){
        if($len > 5){
//            $this->error = '超过了5条干扰线';
//            return false;
            throw new Exception("验证码的线的数量超过了五条了!!!");
        }
        //....
    }

//    public function getError(){
//        return $this->error;
//    }
}