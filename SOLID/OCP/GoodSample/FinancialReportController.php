<?php

namespace SOLID\OCP\GOOD;

class FinancialReportController
{
    private $financialReportInteractor;
    private $screenPresenter;
    private $printPresenter;

    public function __construct(FinancialReportInteractor $financialReportInteractor, ScreenPresenter $screenPresenter, PrintPresenter $printPresenter)
    {
        $this->financialReportInteractor = $financialReportInteractor;
        $this->screenPresenter = $screenPresenter;
        $this->printPresenter = $printPresenter;
    }

    public function printWebView(): string
    {
        // presenterが変更されてもcontrollerは変更されない
        $report = $this->financialReportInteractor->report();
        return $this->screenPresenter->print($report);
    }

    public function printPDFView(): string
    {
        $report = $this->financialReportInteractor->report();
        return $this->printPresenter->print($report);
    }
}
