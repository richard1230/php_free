<?php

trait Website{
    public function getName(){
        return "baidu.com";
    }
}


trait Log{
    public function save(){
        return __METHOD__;
    }
}


trait Comment{
     use Website;
     abstract public function name();
     public static function GlobalName(){
         return "this is static name,hello";
     }
     protected function save (){
        echo "CLass Comment:this is in counts method";

        echo "<hr/>";
        return __METHOD__;
    }
}



class Topic {
    use Log,Comment{
        Comment::save insteadof Log;
//        Comment::save as protected;
        Log::save as  save1;
    }

    public function name()
    {
        return '这是topic中的name方法';
        // TODO: Implement name() method.
    }
}


$topic = new Topic();


//echo  $topic->GlobalName();
echo Topic::GlobalName();
echo "<hr/>";



