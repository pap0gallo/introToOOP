<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Point;

function getMidpoint($p1, $p2)
{
    $midPoint = new Point();
    $midPoint->x = ($p1->x + $p2->x) / 2;
    $midPoint->y = ($p1->y + $p2->y) / 2;
    return $midPoint;
}


$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

$midPoint = getMidpoint($point1, $point2);

print_r($midPoint->x);
