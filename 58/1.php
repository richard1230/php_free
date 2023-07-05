<?php

date_default_timezone_set('PRC');



$dateTime = new DateTime('2025-2-13 1:12:22');

echo $dateTime->format('Y-m-d H:i:s');

$dateTime->setDate(2020,10,1);

echo '<br/>';

// echo $dateTime->format('U');


echo $dateTime->format('Y-m-d H:i:s');

// echo $dateTime->format('U');









