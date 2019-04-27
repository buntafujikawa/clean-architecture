<?php

namespace SOLID\ISP\GOOD;

class User1
{
    private $ops;

    public function __construct()
    {
        $this->ops = new OPS();
    }

    public function ops(): string
    {
        return $this->ops->op1();
    }
}
