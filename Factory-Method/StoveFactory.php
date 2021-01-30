<?php 
require_once('StoveInterface.php');
abstract class StoveFactory {

    abstract public function stoveMethod(): StoveInterface;

    public function createProduct() {
        
        $stove = $this->stoveMethod();

        $result = "Factory Made: {$stove->operate()}";

        return $result;

    }
}