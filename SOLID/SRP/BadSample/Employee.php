<?php

namespace SOLID\SRP\BAD;

class Employee
{
    // for CFO
    public function calculatePay($hourlyWage): int
    {
        $hours = $this->regularHours(20);
        return $hourlyWage * $hours;
    }

    // for COO
    public function reportHours(): int
    {
        return $this->regularHours(20);
    }

    // for CTO
    public function save()
    {

    }

    private function regularHours(int $days): int
    {
        // CFOからの依頼でロジックに変更があった時に、COOに対して報告する内容も変わってしまう
        return 8 * $days;
    }
}
