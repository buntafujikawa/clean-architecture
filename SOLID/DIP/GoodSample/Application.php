<?php

namespace SOLID\DIP\GOOD;

class Application
{
    private $serviceFactory;

    public function __construct(\ServiceFactory $serviceFactory)
    {
        $this->serviceFactory = $serviceFactory;
    }

    public function run()
    {
        try {
            // インターフェースで定義されているmakeSvcを使用
            $service = $this->serviceFactory->makeSvc('ConcreteImple');
            
            // インターフェースで定義されているメソッドを使用
            return $service->run();
        } catch (\Exception $e) {
            // 
        }
    }
}
