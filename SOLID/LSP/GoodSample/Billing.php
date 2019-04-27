<?php

namespace SOLID\LSP\GOOD;

class Billing
{
    private $license;

    public function __construct(License $license)
    {
        $this->license = $license;
    }

    public function bill(): int
    {
        return $this->license->calcFee();
    }
}
