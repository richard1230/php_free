<?php

namespace ExceptionApp\Exceptions;

use Exception;

class ViewException extends Exception{
    public function render(){
        echo "I am in ViewException";
    }
}