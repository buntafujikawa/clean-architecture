<?php

namespace SOLID\OCP\GOOD;

/*
 * ビジネスルールを含んでいるから、他が変更されてもInteractorは変更されない
 */
class FinancialReportInteractor
{
    public function report(): array
    {
        // 計算をして結果を返す
        return [
            'sales' => 1000,
            'cost' => 800,
            'profit' => 200,
        ];
    }

    public function save()
    {
        // dbにデータを登録
    }
}
