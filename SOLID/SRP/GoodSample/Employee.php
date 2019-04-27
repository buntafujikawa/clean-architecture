<?php

namespace SOLID\SRP\GOOD;

/*
 * 重要ではないメソッドを呼び出すFacadeとして使う
 */
class Employee
{
    private $hourReporter;
    private $employeeSaver;

    private $businessDays = 20;
    private $employee = [];

    public function __construct(HourReporter $hourReporter, EmployeeSaver $employeeSaver)
    {
        $this->hourReporter = $hourReporter;
        $this->employeeSaver = $employeeSaver;
    }

    // for CFO
    public function calculatePay($hourlyWage): int
    {
        return $hourlyWage * ($this->businessDays * 8) + 5000;
    }

    // for COO
    public function reportHours(): int
    {
        return $this->hourReporter->reportHours($this->businessDays);
    }

    // for CTO
    public function save(): bool 
    {
        return $this->employeeSaver->saveEmployee($this->employee);
    }
}
