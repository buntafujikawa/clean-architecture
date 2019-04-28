<?php

namespace SOLID\OCP\GOOD;

class ScreenPresenter
{
    public function print(array $report): string
    {
        // web view用のテンプレートにreportの内容を適用させる
        $sales = $report['sales'];
        return "売り上げ: $sales";
    }
}
