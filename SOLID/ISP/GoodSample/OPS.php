<?php

namespace SOLID\ISP\GOOD;

class OPS implements \U1Ops, \U2Ops
{
    public function op1(): string
    {
        return 'op1';
    }

    // これをU1Opsに追加をしないで、新しくインターフェースを作る
    public function op2(): string
    {
        return 'op2';
    }
}
