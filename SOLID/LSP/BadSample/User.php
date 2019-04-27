<?php

namespace SOLID\LSP\BAD;

class User
{
    private $rectangle;

    // rectangleをsquareに変えられない→Userの振る舞いが使用する型に依存することになる
    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function run()
    {
        $this->rectangle->setH(5);
    }
}
