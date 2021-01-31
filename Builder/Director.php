<?php 

class Director
{
    private $builder;

    public function setBuilder(Builder $builder) : void
    {
        $this->builder = $builder;
    }

    public function buildDefaultCar() : void
    {
        $this->builder->makeWheel();
    }

    public function buildFullFeaturedCar() : void
    {
        $this->builder->makeWheel();
        $this->builder->setEngine();
        $this->builder->setSeatCount();
    }
}