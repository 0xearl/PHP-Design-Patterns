<?php 
require_once('StoveFactory.php');
require_once('StoveInterface.php');

class GasPoweredStoveFactory extends StoveFactory {

    public function stoveMethod() : StoveInterface 
    {
        return new GasPoweredStoveProduct();
    }

}
