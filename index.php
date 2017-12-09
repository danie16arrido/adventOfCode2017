<?php
require __DIR__ . '/vendor/autoload.php';

/********************DAY TWO-A******************/
require 'dayTwoinput.csv';
$reader = new \DayTwo\FileReader;

$array = $reader->get2DArrayFromCsv("dayTwoinput.csv", "\t");
$inputCheckSum = new \DayTwo\Checksum($array);
echo "\nCheckSum: ".$inputCheckSum->checkSum();

/********************DAY TWO-B******************/
$inputEvenlyDiv = new \DayTwo\EvenlyDiv($array);
echo "\nEvenlyDiv: " . $inputEvenlyDiv->evenlyDiv();

