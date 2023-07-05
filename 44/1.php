<?php


// $arr = ['中国','江苏','苏州'];
// echo key($arr);


// echo '<br/>';

// echo current($arr);
// echo '<br/>';
// echo next($arr);
// echo '<br/>';
// echo next($arr);
// echo '<br/>';
// echo prev($arr);


$users = [
    ['name'=>'小花','age'=>15],
    ['name'=>'小明','age'=>16],
    ['name'=>'小李','age'=>17],
    ['name'=>'小张','age'=>18],

];
?>

<table border=“1”>
<tr>
    <tr>
     <th>编号</th>
     <th>姓名</th>
     <th>年龄</th>
     <tr>
<?php while($user = current($users)):?>
    <tr>
   <td><?php echo key($users) + 1;   ?></td>
   <td><?php echo $user['name'];   ?></td>
   <td><?php echo $user['age'];   ?></td>
</tr>
<?php next($users); endwhile; ?>
</table>