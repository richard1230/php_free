<?php
date_default_timezone_set('PRC');

// echo time();
// echo microtime(true);

// echo '<br/>';
 
// echo microtime();


function runtime($start=null,$end=null){
    static $cache =[];
    if(is_null($start)){
        return $cache;

    }elseif(is_null($end)){
        return $cache[$start]=microtime(true);
    }else{
        $end = $cache[$end]??microtime(true);
        return $end - $cache[$start];
    }

}

runtime('for');

for($i=0;$i<20000000;$i++){
   $i++;
}

runtime('forend');
echo runtime('for','forend');

echo runtime();






















