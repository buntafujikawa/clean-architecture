<?php

namespace SOLID\LSP\BAD;

/*
 * 正方形は長方形の適切な派生系とは言えない
 */
class Square extends Rectangle
{
    private $side;

    public function setSide(int $side)
    {
        $this->side = $side;
    }
}
