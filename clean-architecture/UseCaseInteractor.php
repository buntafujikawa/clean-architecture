<?php

class UseCaseInteractor implements InputBoundary
{
    private $entity;
    
    public function __construct()
    {
        $this->entity = new SampleEntities();
    }

    public function input(array $data)
    {
        $this->entity->set($data);
    }
}
