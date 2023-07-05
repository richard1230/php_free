<?php


namespace ErrorHandle;

class Error {
    protected $debug;

    public function __construct($debug=true){
        $this->debug =$debug;
    }

    public function error(){
        error_reporting(0);
        set_error_handler([$this,'handle'],E_ALL | E_STRICT);
    }

    public function handle($code, $error, $file, $line){
       $meg = $error."($code)".$file."错误发生在 第 $line 行";
       echo '<hr/>';
       switch ($code){
           case E_NOTICE:
               if($this->debug){
                   echo $meg;
               }
               break;
           default:
               $file="logs/".date("Y_m_d").'.log';
               error_log(date('[c]').$meg.PHP_EOL,3,$file);
               break;
       }
    }
}