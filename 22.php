<?php
#trim:截去字符串首尾的内容

$string = ' www.bing.com ';
echo strlen($string);
echo '<hr/>';
echo strlen(trim($string, ' mco'));

echo '<hr/>';

// rtrim,ltrim
echo strlen(ltrim($string));
echo '<hr/>';
echo strlen(rtrim($string, ' mco'));

echo '<hr/>';

// strtolower
$str = 'Hello, World! How Are You';
echo strtolower($str);

echo '<hr/>';

// strtoupper
echo strtoupper($str);

echo '<hr/>';

// ucfirst
$foo = 'hello world';
echo ucfirst($foo);
echo '<hr/>';

// ucwords
echo ucwords($foo);

echo '<hr/>';

echo ucwords('hello|world', '|');
