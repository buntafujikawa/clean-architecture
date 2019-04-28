<?php

class SampleController
{
    private $inputBoundary;

    public function __construct(InputBoundary $inputBoundary)
    {
        $this->inputBoundary = $inputBoundary;
    }

    public function index($request)
    {
        $this->inputBoundary->input($request);
    }
}
