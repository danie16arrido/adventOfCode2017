<?php
require __DIR__ . '/vendor/autoload.php';
$a = [1,2,3];
$b = new \DayTwo\Checksum($a);

echo $b->checkSum();