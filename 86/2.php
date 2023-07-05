<?php


//$class = glob('.');

//$class = glob('./*');

//$class = glob('../*');

//$class = glob('../*',GLOB_MARK);


$files = glob("{./*.html,./*.txt}",GLOB_BRACE);


print_r($files);