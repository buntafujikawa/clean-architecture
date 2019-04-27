<?php

namespace SOLID\LSP\GOOD;

class PersonalLicence implements License
{
    public function calcFee(): int
    {
        return 50;
    }
}
