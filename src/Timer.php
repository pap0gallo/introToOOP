<?php

namespace App;


namespace App;

class Timer
{
    private $secondsCount;
    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOUR = 3600;

    // BEGIN (write your solution here)
    public function __construct($seconds, $minuts = 0, $hours = 0)
    {
        $this->secondsCount = ($seconds + ($minuts * self::SEC_PER_MIN) + ($hours * self::SEC_PER_HOUR));
    }

    // END

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}
