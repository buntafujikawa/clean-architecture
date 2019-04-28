<?php

interface ServiceFactory
{
    public function makeSvc(string $class): \Service;
}
