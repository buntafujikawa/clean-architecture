<?php

namespace SOLID\LSP\BAD;

class Rectangle
{
    private $height;
    private $width;

    public function setH(int $height)
    {
        $this->height = $height;
    }

    public function setW(int $width)
    {
        $this->width = $width;
    }
}
