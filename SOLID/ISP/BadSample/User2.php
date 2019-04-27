<?php

namespace SOLID\ISP\BAD;

class User2
{
    private $ops;

    public function __construct()
    {
        $this->ops = new OPS();
    }

    public function ops(): string
    {
        return $this->ops->op2();
    }
}
