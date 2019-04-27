<?php

namespace SOLID\SRP\GOOD;

class HourReporter
{
    private $hoge = 0.8;

    public function reportHours(int $days): int
    {
        return (8 * $this->hoge) * $days;
    }
}
