<?php 

class Car
{
    public $parts = [];

    public function listParts() : void
    {
        echo 'Product Parts: ' . implode(', ', $this->parts) . "\n"; 
    }
}