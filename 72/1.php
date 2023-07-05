<?php

$filename = '1.txt';

  $handle =  fopen($filename,'r');


  echo fread($handle,2);
// echo filesize($filename);
  echo '<hr/>';
  
  fseek($handle,0);

  echo fread($handle,filesize($filename));


