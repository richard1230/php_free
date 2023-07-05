<?php
// 变量=(表达式)？值1:值2; 当表达式的返回值为true的时候,变量被赋予值1,否则被赋予值2

// $name = '胡歌1';

// echo $name ?: '彭于晏';

echo '<hr/>';

// $who = null;
echo isset($who) ? 'yes' : 'No';

echo '<hr/>';
echo $who?? "who不存在,为null";

// ?:  ---->只判断true或者false
//??   ----->判断变量是否存在,并且不为null
