<?php

$str = '<h1>
你好 
</h1> 
<H2>
中国江苏苏州,你来过么
</H2>';


$preg = '/<h([1-6])>.*?<\/h\1>/is';


$replace = '';

preg_match_all($preg,$str,$matches);




print_r($matches);

// echo preg_replace($preg,$replace,$str);











