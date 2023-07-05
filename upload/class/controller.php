<?php

include 'Uploader.php';


$up = new Uploader;

$files =  $up->make();

print_r($files);