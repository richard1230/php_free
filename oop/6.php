<?php

trait Log{
    public function save(){
        return __METHOD__;
    }
}


trait Comment{
    public function counts(){
        echo "CLass Comment:this is in counts method";

        echo "<hr/>";
        return __METHOD__;
    }
}

class Web{
    public function counts(){
        echo ":Class Webthis is in counts method";

        echo "<hr/>";
        return __METHOD__;
    }
}

class Topic extends Web {
    use Comment,Log;
}


$topic = new Topic();


echo  $topic->counts();

echo "<hr/>";


