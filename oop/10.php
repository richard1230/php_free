<?php

 abstract class Query{
     abstract public function record(array $data);
     public function select(){
         return $this->record(['name'=>'中国','age'=>'5000','number'=>18888888888]);
     }
 }



 class Model extends Query
 {
     protected $field = [];


     public function all()
     {
         $this->select();
         return $this->field;
     }

     public function record(array $data)
     {
         $this->field = $data;
         // TODO: Implement record() method.
     }

     public function __get($name)
     {
         if (isset($this->field[$name])) {
             return $this->field[$name];
         } else {
             throw new Exception('参数有问题');
         }
     }

     public function __set($name, $value)
     {

         if (isset($this->field[$name])) {
             return $this->field[$name] = $value;
         } else {
             throw new Exception('参数出错');
         }
     }


     public function __unset(string $name)
     {
         if (isset($this->field[$name])){
             $this->field[$name]='';
             return true;
         }  else{
          throw new Exception('属性出错');

         }
         // TODO: Implement __unset() method.
     }

          public function __isset($name){
                   return isset($this->field[$name])  ;
          }

        
        
          public function __call($name,$arguments){
                   echo "this is in __call";
                        echo "<hr/>";
                   $action = 'getAttribute'.$name;
                   if (method_exists($this,$action)){
                             return call_user_func_array([$this,$action],$arguments);
                   }
          }

          public static function __callStatic($name,$arguments){
                switch ($name){
                    case 'getAll':
                        return call_user_func_array([new static(),'all'],$arguments);
                        break;
                }

          }

//            public static  function show(){
//                echo "this is static method   ";
// }
        
        
        
 }

 class User extends Model{
     protected function getAttributeNumber(){
                echo "this is in getAttributeNumber";
     }
 }
 


 
 

try {
     print_r(User::getAll());
//     $user = New User();
//     print_r( $user->all());
//     echo "<hr/>";
//     echo $user->show();

}  catch (Exception $e){
    echo  $e->getMessage();
}