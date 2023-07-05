<?php

namespace ExceptionApp\Exceptions;

use Exception;

class ValidateException extends Exception{
        public function render(){
            echo "render is in ValidateException";
        }
}