<?php

namespace SOLID\DIP\GOOD;

class ServiceFactoryImpl implements \ServiceFactory
{
    public function makeSvc(string $class): \Service
    {
        try {
            return new $class;
        } catch (\Exception $e) {
            throw new \Exception("$class クラスは存在しません。");
        }
    }
}
