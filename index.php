<?php

require_once 'Calculation.php';

use Containers\Calculation;


$trans1 = new Calculation();
$transport1 = $trans1->square(100,100);

echo '<p>' . "Transport 1 Square: " . $transport1 . '</p>' . "\r\n";
$transport1 = $trans1->circle(50);
echo '<p>' . "Transport 1 Circle: " . $transport1 .'</p>'  , PHP_EOL;

$trans2 = new Calculation();
echo '<p>' ."Transport 2 Square: " . $trans2->square(400,400) . '</p>',PHP_EOL;

echo '<p>' . "Transport 2 Circle: " . $trans2->circle(100) . '</p>',PHP_EOL;

$trans3 = new Calculation();

echo '<p>' . "Transport 3 Square: " . $trans3->square(100,100) . '</p>',PHP_EOL;

echo '<p>' . "Transport 3 Circle: " . $trans3->circle(50) . '</p>' ,PHP_EOL;