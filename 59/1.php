<?php

$dateTime1 = new DateTime();

$dateTime2 = new DateTime('2023-10-1');

$interval = $dateTime1->diff($dateTime2);

$format ='距离国庆还有<span style="color:red">%m个月%d天%h小时%i分钟%s秒</span> <br/>共%R%a天';

echo $interval->format($format);