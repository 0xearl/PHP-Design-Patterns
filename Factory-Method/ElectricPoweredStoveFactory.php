<?php 
require_once('StoveFactory.php');
require_once('StoveInterface.php');

class ElectricPoweredStoveFactory extends StoveFactory {

   public function stoveMethod() : StoveInterface 
   {
       return new ElectricPoweredStoveProduct();
   }

}