<?php 

class CarBuilder implements Builder
{
    private $product;

    function __construct() {
        $this->reset();
    }

    public function reset() : void
    {
        $this->product = new Car();
    }

    public function makeWheel() {
        $this->product->parts[] = 'Wheels';
    }

    public function setEngine() {
        $this->product->parts[] = '3.0L TFSI Supercharged DOHC V-6 Engine';
    }

    public function setSeatCount() {
        $this->product->parts[] = 4;
    }

    public function getProduct() : Car
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}