<?php

namespace SOLID\LSP\GOOD;

class BusinessLicense implements License
{
    public function calcFee(): int 
    {
        return 100;
    }
}
