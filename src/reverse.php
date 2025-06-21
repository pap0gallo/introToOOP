<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Point;
use App\Segment;


function reverse($segment)
{
    $beginPoint = new Point(($segment->startPoint->x), ($segment->startPoint->y));
    $endPoint = new Point(($segment->endPoint->x), ($segment->endPoint->y));
    return new Segment($endPoint, $beginPoint);
}