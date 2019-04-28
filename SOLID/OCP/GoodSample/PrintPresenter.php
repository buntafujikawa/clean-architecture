<?php

namespace SOLID\OCP\GOOD;

class PrintPresenter
{
    public function print(array $report): string
    {
        // PDF用のテンプレートにreportの内容を適用させる
        $sales = $report['sales'];
        $cost = $report['cost'];
        return "売り上げ: $sales, 原価: $cost";
    }
}
