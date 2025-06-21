<?php

namespace App;

class Segment
{
    public $beginPont;
    public $endPoint;

    public function __construct($beginPoint, $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}